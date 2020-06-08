/**
 * Created by et on 12/27/14.
 */

String.prototype.id = function(prefix){
    return this.replace(RegExp('^.*' + (prefix ? prefix.replace(/(\\?)[\-]/,function($0,$1){return $1 ? $0 : '\\' + $0;}) : 'id') + '\\-(\\d+).*$'),'$1');
};

function NumberDeclension(number,word){
    // [nominativeSingle,nominativePlural,genitive]
    var declension = ((number % 100 == 1) || ((number % 100 > 20) && (number % 10 == 1))) ? 0 :
        ((((number % 100 <= 4) || (number % 100 > 20)) && (number % 10 >= 2) && (number % 10 <= 4)) ? 1 : 2);
    return (number + ' ' + word[declension]);
}

var Cart = (function(){
    function _Cart(CONFIG){
        var __Cart = this;
        $.ajax({
            async: false,
            dataType: 'json',
            success: function(response){
                __Cart.products = [];
                for(var key in response){
                    __Cart.products[response[key].id] = response[key];
                    __Cart.products[response[key].id].name = $('<div/>').html(__Cart.products[response[key].id].name).text();
                }
            },
            type: "GET",
            url: '/shop?json=1'
        });
        __Cart.loadFromCookie();
        if(CONFIG) __Cart.setConfig(CONFIG).expose();
    }

    _Cart.prototype.flush = function(){
        this.cart = [];
        this.saveToCookie();
    };

    _Cart.prototype.setConfig = function(CONFIG){
        this.CONFIG = CONFIG;
        return this;
    };

    _Cart.prototype.saveToCookie = function(){
        setCookie('cart',JSON.stringify(this.cart),{path:'/'});
        return this;
    };

    _Cart.prototype.loadFromCookie = function(){
        this.cart = getCookie('cart') ? JSON.parse(getCookie('cart')) : [];
        for(var key in this.cart){
            if(this.cart[key] === null) this.cart[key] = undefined;
        }
        return this;
    };

    _Cart.prototype.calculate = function(){
        this.price = 0;
        this.weight = 0;
        this.count = 0;
        for(var key in this.cart){
            if(this.cart[key] == undefined) continue;
            this.price += this.products[key].price * this.cart[key];
            this.weight += this.products[key].weight * this.cart[key];
            this.count += this.cart[key];
        }
        return this;
    };

    _Cart.prototype.expose = function(flag){
        var __Cart = this;
        __Cart.calculate();
        switch(__Cart.CONFIG.mode){
            case 'short':
                $('#' + __Cart.CONFIG.countSpan).text(NumberDeclension(__Cart.count,['покупка','покупки','покупок']));
                $('#' + __Cart.CONFIG.priceSpan).text(NumberDeclension(__Cart.price,['рубль','рубля','рублей']));
                break;
            case 'full':
                var container = $('#' + __Cart.CONFIG.fullCartContainer);
                var sample = $('.' + __Cart.CONFIG.sample);
                var _parent = sample.parent();
                _parent.children('.' + __Cart.CONFIG.productContainer).remove();
                for(var key in __Cart.cart){
                    if(__Cart.cart[key] == undefined) continue;
                    var clone = sample.clone().removeClass(__Cart.CONFIG.sample).addClass(__Cart.CONFIG.productContainer).appendTo(_parent).delegate('.' + __Cart.CONFIG.minus,'click',function(e){
                        __Cart.update($(this).parents('.' + __Cart.CONFIG.productContainer).attr('id').id(__Cart.CONFIG.idPrefix),-1);
                    }).delegate('.' + __Cart.CONFIG.plus,'click',function(e){
                        __Cart.update($(this).parents('.' + __Cart.CONFIG.productContainer).attr('id').id(__Cart.CONFIG.idPrefix),1);
                    }).delegate('.' + __Cart.CONFIG.delete,'click',function(e){
                        __Cart.update($(this).parents('.' + __Cart.CONFIG.productContainer).attr('id').id(__Cart.CONFIG.idPrefix),undefined);
                    }).attr('id',__Cart.CONFIG.idPrefix + '-' + key);
                    clone.find('.' + __Cart.CONFIG.nameField).text(__Cart.products[key].name);
                    clone.find('.' + __Cart.CONFIG.pricePerUnitField).text(__Cart.products[key].price);
                    clone.find('.' + __Cart.CONFIG.weightPerUnitField).text(__Cart.products[key].weight);
                    clone.find('.' + __Cart.CONFIG.quantityField).text(__Cart.cart[key]);
                    clone.find('.' + __Cart.CONFIG.priceField).text(__Cart.products[key].price * __Cart.cart[key]);
                    clone.find('.' + __Cart.CONFIG.picField).css('background-image','url(\'' + __Cart.products[key].pic + '\')');
                }
                container.find('.' + __Cart.CONFIG.totalPriceField).text(__Cart.price);
                container.find('.' + __Cart.CONFIG.totalWeightField).text(__Cart.weight);
                break;
            case 'lp':
                var ids = [];
                for(var i in __Cart.products)ids.push(i);
                $('#' + __Cart.CONFIG.prod0totalPrice).text(__Cart.cart[ids[0]] * __Cart.products[ids[0]].price);
                $('#' + __Cart.CONFIG.prod0count).text(__Cart.cart[ids[0]]);
                $('#' + __Cart.CONFIG.prod1totalPrice).text(__Cart.cart[ids[1]] * __Cart.products[ids[1]].price);
                $('#' + __Cart.CONFIG.prod1count).text(__Cart.cart[ids[1]]);
                break;
            case 'delivery':
                var form = $(__Cart.CONFIG.form);
                var data = form.serializeArray();
                if(!flag) data.push({name:'preliminary',value:1});
                $.post(form.get(0).action,data,function(response){
                    response = JSON.parse(response);
                    switch(response.action){
                        case 'die':
                            alert(response.text);
                            break;
                        case 'get':
                            $(__Cart.CONFIG.priceSpan).text(NumberDeclension(response.price,['рубль','рубля','рублей']));
                            $(__Cart.CONFIG.weightSpan).text(response.weight);
                            break;
                        case 'replace':
                            form.append(response.html).unbind('submit').attr('action','https://auth.robokassa.ru/Merchant/Index.aspx').submit();
                            break;
                        case 'redirect':
                            document.location.href = response.url;
                            break;
                    }
                });
                break;
            default:
        }
        return this;
    };

    _Cart.prototype.update = function(product,change){
	switch(typeof this.cart[product]){
	case 'number':
	case 'string':
            this.cart[product] *= 1;
	    break;
	default:
	    this.cart[product] = 0;
	}
	switch(change){
	case 1:
	    this.cart[product] ++;
	    break;
	case -1:
	    this.cart[product] -= (this.cart[product]) ? 1 : 0;
	    break;
	default:
	    this.cart[product] = undefined;
	}
        this.saveToCookie();
        this.expose();
        return this;
    };

    var instance;

    function createInstance(CONFIG){
        var object = new _Cart(CONFIG);
        return object;
    }

    return {
        getInstance: function(CONFIG){
            if(!instance){
                instance = createInstance(CONFIG);
            }
            return instance;
        }
    };
})();
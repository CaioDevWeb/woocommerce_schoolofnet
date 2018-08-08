jQuery(window).load(function(){
    (function(){
        $ = jQuery.noConflict();
        
        function fswp_variable_installment_calculation_MP(){
            var final_price = $('.single_variation_wrap .price .amount:last').text();
            final_price = final_price.match(/\d+/g);
            var final_price_length = Number(final_price.length);
            var crude_price = '';
            var installments_html;
         	var fator_MP = [1,1.0239,1.0478,1.0717,1.0915,1.1072,1.1231,1.1392,1.1554,1.1717,1.1882,1.2048];            
            var i;
            for(i = 1; i < final_price_length; i++){
                crude_price += final_price[i - 1];
            }

            crude_price += '.' + final_price[final_price_length - 1];

            crude_price = Number(crude_price);

            if(crude_price <= installment_minimum_value){
                installments_html = '';
            }
            else if(crude_price > installment_minimum_value){
                var installments_price = (crude_price * fator_MP[installment_qty-1]) / installment_qty;
                installments_price = installments_price.toFixed(2);

                if(installments_price < installment_minimum_value){
                    var parcelas_menor = installment_qty;
                    while(parcelas_menor > 2 && installments_price < installment_minimum_value){
                        parcelas_menor--;
                        installments_price = (crude_price * fator_MP[parcelas_menor-1]) / parcelas_menor;
                        installments_price = installments_price.toFixed(2);
                    }

                    if(installments_price >= installment_minimum_value){
                        installments_html = installment_prefix + ' ' + parcelas_menor + x_de + ' <span class="amount">' + formatMoney(cur_symbol, installments_price, 2, dec_sep, th_sep, cur_pos) + '</span> ' + installment_suffix;
                    }
                    else{
                        installments_html = '';
                    }
                }
                else{
                    installments_html = installment_prefix + ' ' + installment_qty + x_de + ' <span class="amount">' + formatMoney(cur_symbol, installments_price, 2, dec_sep, th_sep, cur_pos) + '</span> ' + installment_suffix;
                }
            }

            $('.fswp_variable_installment_calculation').html(installments_html);
        }

        var default_variation = Number($('.single_variation .price').length);

        if(default_variation){
            fswp_variable_installment_calculation_MP();
        }
        $('.variations select').bind('change', function(){
            setTimeout(function(){
                fswp_variable_installment_calculation_MP();
            }, 100);       
        });
    })();
});
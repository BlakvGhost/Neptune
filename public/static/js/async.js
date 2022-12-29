var test = null;
!function(t) {
    "use strict"
    let o = function() {};
    o.prototype.init = function() {
        let arrowPosition = 0;
        o.prototype.init.page = function(){
            t('#main .btn-load').each(function(px,link){
                t(link).click(function(){
                    let link = {'page':t(this).data('link')};
                    if(t(this).data('bht-action') === 'crud'){link = {'page':t(this).data('link'),'id':t(this).data('bht-id')};}
                    t.ajax({url:'/pages',data:link,success:function(e){t('#main').html(e);},beforeSend:function(){t('#MainPreloader').removeClass('d-none');},complete:function(){t('#MainPreloader').addClass('d-none')}})
                });
            });
            return 0;
        }();
        o.prototype.init.form = function(){
            o.prototype.init.requiredField = function (){
            let indexed = [];
            $('input,select,textarea').each(function(e,a){a.hasAttribute('aria-required') ? indexed.push(a) : null;});
            function createError(s,y,d){ !s ? $(y).removeClass('is-invalid').addClass('is-valid') && $(d).detach() : $(y).addClass('is-invalid').removeClass('is-valid').parent().append(d);}
            $(indexed).each(function(e,f){
                f.required = true;
                let errorInfo = document.createElement('small'),message = f.hasAttribute('data-ariaError') ? $(f).data('ariaerror') : 'Attention, ce champs doit etre rempli';
                $(errorInfo).html(`<i class="fa fa-info-circle"></i>&nbsp; ${message} `).addClass('form-text text-danger w-100 mt-2 fst-italic');
                $(this).blur(function(){
                    if (f.hasAttribute('aria-sugg')){
                       // f.getAttribute('data-selected') === 'false' || f.getAttribute('data-selected') === null ? createError(true,this,errorInfo) : createError(false,this,errorInfo);
                    }else{
                        $(this).val().length === 0 ? createError(true,this,errorInfo) : createError(false,this,errorInfo);
                    }
                });
                $(f.form).find("input:submit,button:submit").click(function(){ $(f).val().length === 0 ? createError(true,f,errorInfo) : null ;});
            });
            return 0;
        }();
        $('form').submit(function(e){e.preventDefault();})
            t('.dataForm .submit').click(function (e) {
                let btn = t(this);
                if (e.target.form.checkValidity()){
                   t.ajax({url:t('.dataForm').attr('action'),data:t('.dataForm').serialize(),type:'POST',success:function(r){
                        if( t('.dataForm').attr('action') === '/user_connect'){r === 'connected' ? window.location.href = '/' : null; }
                        let result = JSON.parse(r);
                        let data = result['data'];
                        if(result['status'] === 200){
                            t('#formSuccess').removeClass('d-none alert-danger').addClass('alert-success');
                            t('.category_name').text(result['messages']); t('.msg').html(null);
                        }else {
                            t('#formSuccess').removeClass('d-none alert-success').addClass('alert-danger');
                            t('.category_name').text(result['messages']);
                            let text = '';
                            for(let i in data){
                                text += '<small><i class="fa fa-window-close"></i>&nbsp;'+ data[i] +'</small><br>';
                            }
                            t('.msg').html(text);
                        }
                        t('#main').animate({scrollTop: 0},'fast');
                    },beforeSend: function(){t(btn).addClass('processing disabled');},complete: function(){t(btn).removeClass('processing disabled')}
                    })
                }else{
                    e.target.form.reportValidity();
                }
            });
            o.prototype.init.suggArrow = function(c,code,kwarg=null,po=null){
                    let list = $(c).find('.list-group-item-action'),input=$(c).find('input');
                    $(list).removeClass('activeArrow');
                    arrowPosition = code === 40 ? arrowPosition += 1 : arrowPosition -= 1;
                    arrowPosition = arrowPosition < 0 || arrowPosition > list.length ? 0 : arrowPosition ;
                    code === 13 ? $(list[arrowPosition]).click() : $(list[arrowPosition - 1]).addClass('activeArrow') && kwarg(list[arrowPosition-1],c,input,po);
            };
            o.prototype.init.suggestion = function(){
                function fillQuantity(UnitPrice){
                    t('#id_quantite').keyup(function(){t('#price').val(UnitPrice * t(this).val());});
                };
                function fieldAction(c,elt,input,index){
                        t(input).val(t(c).text()).attr('data-selected',true);
                        t(elt).attr({'data-bht-unit':'rlx','data-bht-price':t(c).data('price')})
                        if(t(c).data('table') === 'customers'){
                            t('#id_contact').val(t(c).data('contact'));
                            t('#id_customer').val(t(c).data('id'));
                        }else{
                            t('#price').val(t(c).data('price') * t('#id_quantite').val()); index -= 1;
                            t('.fieldToPrint').eq(index).find('#id_product').val(t(c).data('id'));
                            t('.fieldToPrint').eq(index).find('#id_quantity_d').attr({'min':t(c).data('stock')}).val(t(c).data('stock'));
                            fillQuantity(t(c).data('price'));
                        }
                }
                function fillField(elt,input,index){
                    t(elt).find('li').each(function(i,e){
                        t(this).click(function(){
                            fieldAction(this,elt,input,index);
                            t(elt).find('.suggestions').addClass('d-none');
                        });
                    });
                };
                t('.suggests').each(function(i,elt) {
                    let input = t(this).find("input:text");
                    arrowPosition = 0;
                    t(input).keyup(function(e){
                        $(input).attr('data-selected',false);
                        if(t(this).val().length > 0){
                            if ((e.keyCode === 40) || (e.keyCode === 38) || (e.keyCode === 13) ){
                                o.prototype.init.suggArrow(elt,e.keyCode,fieldAction,i);
                            }else{
                                t(elt).find('.suggestions').removeClass('d-none');
                                t.ajax({url:t('.dataForm').data('action'),data:{'page':t(this).data('action'),'table':t(this).data('table'),'q':t(this).val()},success:function(e){t(elt).find('.suggestions').html(e);fillField(elt,input,i);}})
                            }
                        }else{
                            t(elt).find('.suggestions').html(null);
                        }
                    });
                });
            };
            o.prototype.init.suggestion();
            return 0;
        }();
        t(window).click(function(){
            t('.suggestions,.h_suggestions').addClass('d-none');
            $('#users_panel').addClass('collapse').removeClass('show');
        })
    },
        o.prototype.init();
        Utils.asy = o;
}(window.jQuery)

!function(n) {
    "use strict"
    var ui = function() {};
    ui.prototype.init = function() {
        const sideBarLink = n('aside .list-group-item-action:not(.btn-load,.load)');
        const sideHideItems = n('.text-group,.under_collapse,.sideDesc,.sideLogo,.fa-pull-right,.copyright');
        function requestPage(link){
                n.ajax({url:'/pages',data:{'page':link},success:function(e){n('#main').html(e);},beforeSend:function(){n('#MainPreloader').removeClass('d-none');},complete:function(){n('#MainPreloader').addClass('d-none')}})
                return 0;
        }
        ui.prototype.init.checkMode = function(q,elmt){
            if (q){
                $(elmt).removeClass('mdi-brightness-7').addClass('mdi-brightness-4 text-dark');
                n('main').addClass('bg-dark','text-white').find('a,h3,h2,h5').addClass('text-white');
                n('.cardDarked,.modal-content').addClass('bg-secondary text-white');
            }else{
                $(elmt).addClass('mdi-brightness-7').removeClass('mdi-brightness-4 text-dark');
                n('main').removeClass('bg-dark','text-white').find('a,h3,h2,h5').removeClass('text-white');;
                n('.cardDarked,.modal-content').removeClass('bg-secondary text-white');
            }
        }
        ui.prototype.init.pageSide = function(){
            n('aside .btn-load,.load').each(function(px,link){n(link).click(function(){
                requestPage(n(this).data('link'));
            });});
            return 0;
        };
        ui.prototype.init.chevron = function(){
            n(sideBarLink).each(function(e,btn){n(btn).click(function(){!n(this).hasClass('collapsed') ? n(this).find('i:last-child').attr('class','fas fa-minus-circle fa-pull-right') : n(this).find('i:last-child').attr('class','fas fa-plus-circle fa-pull-right');});});
            return 0;
        }();
        ui.prototype.init.sideOnMin = function(){
            n('#toggleSide').click(function(){
                if (!n(this).hasClass('cl')){
                    n(this).addClass('cl');
                    n(sideHideItems).hide();
                    n('aside').addClass('w-auto');
                    n(sideBarLink).each(function(e,y){n(this).data('link',n(this).data('eg-link')).click(function(){
                        $(this).data('link') === null ? null : requestPage(n(this).data('link'))
                        })
                    });
                }else{
                    n(this).removeClass('cl');
                    n(sideHideItems).show();
                    n(sideBarLink).each(function(e,y){n(this).data('link',null);});
                    $('aside').removeClass('w-auto');
                    n('.under_collapse').css('display','');
                }
                n('.mainContainer').css('width',window.innerWidth - $('aside').width());
            });
            return 0;
        }();
        ui.prototype.init.darkMode = function(){
            n('.darkmode').each(function (e,l){$(l).click(function(){$(this).find('i').hasClass('mdi-brightness-7') ? ui.prototype.init.checkMode(true,$(this).find('i')) : ui.prototype.init.checkMode(false,$(this).find('i'));});})
            return 0;
        }();
        ui.prototype.init.toast = function(msg,title){
            toastr.options = {"closeButton": true,"debug": false,"newestOnTop": false,"progressBar": true,"positionClass": "toast-top-right",
              "preventDuplicates": true,"onclick": null,"showDuration": "700","hideDuration": "1000","timeOut": "5000","extendedTimeOut": "1000",
              "showEasing": "swing","hideEasing": "linear","showMethod": "fadeIn","hideMethod": "fadeOut"};
            toastr['info'](msg,title);
        };
        ui.prototype.init.mobile = function(){
            function isMobile(){var a=navigator.userAgent||navigator.vendor||window.opera;if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)))return true;else return false}
            function mobileUI(){
                if (isMobile()){
                    //ui.prototype.init.toast("Vous aurez une meilleur experience d'affichage en utilisant un PC",'Info');
                    n('aside').addClass('offcanvas offcanvas-start').find('.under_collapse a').each(function(p,e){n(this).click(function(){n('#showCanvas').click();});});;
                }else{
                    n('aside').attr({'class':'col col-2 p-0 fv-visible','style':'visibility:visible!important;height:100vh'})
                }
            };
            n(window).on({'load': function(){n('#WindowPreloader').fadeOut('2000');mobileUI();},'resize': function(){mobileUI();}});
            return 0;
        }();
        ui.prototype.init.dragSidebar = function(){            
            n('.fv-resize').bind('drag',function(e){
                if (!$('#toggleSide').hasClass('cl')){
                    let pageX = e.originalEvent.pageX,mainWidth = window.innerWidth - pageX;
                    pageX > 0 ? $('aside').attr('style',`width:${pageX}px!important;height:100vh;`) && $('#mainContainer').attr('style',`width:${mainWidth}px!important`) : null;
               }
            });                       
            return 0;
        }();
        ui.prototype.init.sortByHeader = function(){
            function fillHeaderInput(c,elt,input,index){$(input).val($(c).text());}
            let indexed = [];
            $('aside a').each(function(e,a){a.hasAttribute('aria-desc') ? indexed.push({'title':$(this).attr('aria-desc'),'link':$(this).data('link')}) : '';});
            $('.h_suggests').each(function (p,k){
                $(this).find('input').keyup(function (e){
                    let val = $(this).val(),cont = $(k).find('.h_suggestions');
                    $(cont).removeClass('d-none');
                    if (val.length > 0 ){
                        if ((e.keyCode === 40) || (e.keyCode === 38) || (e.keyCode === 13) ){
                            Utils.asy.prototype.init.suggArrow(k,e.keyCode,fillHeaderInput);
                        }else{
                            $(cont).html(null);
                            $(indexed).each(function (i,t){
                                if (t['title'].toLocaleLowerCase().includes(val.toLocaleLowerCase())){
                                    if (i <= 10){
                                        $(cont).html(`${$(cont).html()} <a href="javascript:void(0)" class="list-group-item list-group-item-action bg-light load" data-link="${t['link']}">${i+1} .| ${t['title']}</a>`)
                                    }else if (i === 11 ){
                                        $(cont).html(`${$(cont).html()} <a href="javascript:void(0)" class="list-group-item list-group-item-control bg-light text-primary text-center">....... </a>`)
                                    }
                                }
                            });
                            ui.prototype.init.pageSide();
                        }
                    }else{
                        $(cont).html(null);
                    }
                });
            });
            return 0;
        }();
        ui.prototype.init.pageSide();
    },
    ui.prototype.init();
    Utils.darkMode = ui.prototype.init.checkMode;
}(window.jQuery)

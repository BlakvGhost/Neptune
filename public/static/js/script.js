!function() {
    "use strict"
    Utils.prototype.init = function (){
        Utils.prototype.init.showPassword = function (){
            $('.showPass').each(function (i,e){
                let input = $(this).find('input');
                $(this).find('button').click(function (){$(input).is(':password') ? $(input).attr('type','text') && $(this).find('i').attr('class','fa fa-eye-slash') : $(input).attr('type','password') && $(this).find('i').attr('class','fa fa-eye');});
            })
            return 0;
        }();
    Utils.prototype.init.print = function(){
        let text = ``
    }()    
        
   },
    Utils.prototype.init();
    try {
      window.jQuery.SweetAlert.init($('table tr'));
    } catch (e) {
      console.warn('JS modules not loaded');
    }
}(window.jQuery)

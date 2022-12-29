var demo = null;
!function(t) {
    "use strict"
    var o = function(){};
    o.prototype.init = function (){
        o.prototype.init.pagine = function (){
            let tableRow = $('.fv-table tbody tr'),tableLength = tableRow.length,perPage = $('.fv-table').data('table-sort');
            function makePaginationBtn(activePage){
                perPage = perPage === undefined ? 10 : perPage;
                let nbreDePage = Math.ceil(tableLength/perPage)+1,btnArea = $('.pagination');
                activePage = activePage === undefined || activePage > nbreDePage ? 1 : activePage;
                let prevClass = activePage <= 1 ? 'disabled' : null;
                let nextClass = activePage === nbreDePage-1 ? 'disabled' : null;
                $(btnArea).html(null);
                for (let i=0;i<=nbreDePage;i++){
                    let activeClass = i === activePage ? 'active' : null;
                    if (nbreDePage <= 15){
                        if (i === 0){
                            $(btnArea).html(`${$(btnArea).html()} <li class="page-item previous ${prevClass}" data-fv-page="${activePage-1}"><a href="javascript:void(0)" class="page-link">Precedent</a></li>`);
                        }else if (i === nbreDePage){
                            $(btnArea).html(`${$(btnArea).html()} <li class="page-item next ${nextClass}" data-fv-page="${activePage+1}"><a href="javascript:void(0)" class="page-link">Suivant</a></li>`);
                        }else{
                            $(btnArea).html(`${$(btnArea).html()} <li class="page-item ${activeClass}" data-fv-page="${i}"><a href="javascript:void(0)" class="page-link">${i}</a></li>`);
                        }
                    }
                };
                let ttl = perPage*activePage;
                $('.fv-table tbody').html($(tableRow).slice(ttl-perPage,ttl));
                $('.currentPage').text(activePage);$('.totalPage').text(nbreDePage-1);
                try {
                    window.jQuery.SweetAlert.init(tableRow);
                    Utils.asy.prototype.init();
                }catch (e){
                    console.warn("JS files not loaded");
                }
                $("#main .page-item:not('.disabled')").click(function (){
                    makePaginationBtn($(this).data('fv-page'));
                });
            };
            makePaginationBtn();
          return 0;
         }();
         o.prototype.init.sortTable = function() {
            t('#id_sort').keyup(function(){
                let val = t(this).val();
                t('tbody tr').each(function(px,tr){t(this).find('.sortCol').text().toLocaleLowerCase().includes(val.toLocaleLowerCase()) ? t(this).removeClass('d-none').addClass('animated lightSpeedIn') : t(this).addClass('d-none');})
            });
            return 0;
        }();
        o.prototype.init.detailClient = function(){
            $('.fv-table tr').each(function(e,a){
                $(this).find('.showUserModal').click(function(){
                    $('#userModalNames').text(a.getAttribute('data-fv-customerName'));
                    $('#userModalContact').text(a.getAttribute('data-fv-customerContact'));
                    $('#userModalShoppDate').text(new Date(a.getAttribute('data-fv-shoppingDate')).toDateString());
                    $('#userModalShoppTime').text(new Date(a.getAttribute('data-fv-shoppingDate')).toLocaleTimeString());
                });
            });
        }()
   },
    o.prototype.init();
}(window.jQuery)

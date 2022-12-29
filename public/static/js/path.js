!function(t) {
    "use strict"
    const Path = function() {};

    const DATA_LINK = `data-link`;
    const LINK_SELECTOR = `[${DATA_LINK}]`;
    const LINK_ANCHOR = `#`;

    Path.prototype.init = function() {
        console.warn("Loaded Path.init()")
        this.rootTable = {
            achat: "produit/achat",
            produit_add: "produit/ajouter",
            home: "acceuil",
        }
        this.elt = document.querySelectorAll(LINK_SELECTOR);
        this.setRootPath();
    }
    Path.prototype.to = function (link) {
        t.ajax({
            url:'/pages',
            data:{'page':link},
            success: function(e){
                t('#main').html(e);

            },
            beforeSend: function(){
                t('#MainPreloader').removeClass('d-none');
            },complete: function(){
                t('#MainPreloader').addClass('d-none')
            }
        })

    }
    Path.prototype.setRootPath = function (){
        const url = function () {

            return location.hash.split(LINK_ANCHOR)[1] ?? 'home'
        };
        const revertUrl = () => {

            for (let [a,b] of Object.entries(this.rootTable)) {
                if (b === url() ){
                    let _l = document.querySelector(`[${DATA_LINK}=${a}]`);
                    $(_l.parentElement).addClass('show');
                    $(_l.parentElement.previousElementSibling).click();
                    return a;
                }
            }
            return 'home';
        };

        $(this.elt).each( (p, _e) => {
            const _lData = _e.getAttribute(DATA_LINK);
            let _l = location.origin + location.pathname + LINK_ANCHOR + this.rootTable[_lData];

            $(_e).bind('click',() => {
                location.href = _l;
                this.to(_lData);
            });
        });

        this.to(revertUrl() );

    },
        Path.prototype.init();

}(window.jQuery)
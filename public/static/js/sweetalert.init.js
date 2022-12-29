!function(t) {
    "use strict";
    var e = function() {};
    e.prototype.init = function(table) {
        function confirmDelete(elt){
            $.ajax({
                url:'/delete_article',
                data:{'id':$(elt).data('fv-id'),'type':$(elt).data('fv-type')},
                type:'POST',
                success:function(e){
                    e === 'deleted' ? $(elt).detach() : null;
                }});
            Swal.isLoading();
               return 0;
        };
        $(table).each(function (k,a){
            $(this).find('.confirmDelete').click(function(){
                let object = t(this).data('bht-produit');
                Swal.fire({
                    title: "<h5>Voullez-vous vraiment Supprimer " + object + "?</h5>",
                    text: "Vous ne pouvez plus revenir en arriere !",
                    type: "warning",
                    showCancelButton: !0,
                    confirmButtonText: "Oui, Supprimer!",
                    cancelButtonText: "Non, Annuler!",
                    confirmButtonClass: "btn btn-success mt-2",
                    cancelButtonClass: "btn btn-danger ms-2 mt-2",
                    buttonsStyling: !1
                }).then(function(t) {
                    t.value ? Swal.fire({
                        title: "Supprimer!",
                        text: object +  " est Supprimé.",
                        type: "success",
                        allowOutsideClick: confirmDelete($(a)),
                    }) : t.dismiss === Swal.DismissReason.cancel && Swal.fire({
                        title: "Annuler",
                        text: object + " Non Supprimé",
                        type: "error"
                    })
                })
            });
            $(this).find('.confirmPass').click(function(){
                let user = $(this).data('fv-person');
                Swal.fire({
                    title: `<h5>Voullez-vous vraiment confirmer la demande de reinitialisation de mot de passe de ${user} ?</h5>`,
                    text: "Vous ne pouvez plus revenir en arriere !",
                    type: "warning",
                    showCancelButton: !0,
                    confirmButtonText: "Oui, Confirmer!",
                    cancelButtonText: "Non, Annuler!",
                    confirmButtonClass: "btn btn-success mt-2",
                    cancelButtonClass: "btn btn-danger ms-2 mt-2",
                    buttonsStyling: !1
                }).then(function(t) {
                    t.value ? Swal.fire({
                        title: "Confirmer!",
                        text: `La demande de ${user} est confirmeé`,
                        type: "success",
                        allowOutsideClick: confirmDelete($(a)),
                    }) : t.dismiss === Swal.DismissReason.cancel && Swal.fire({
                        title: "Annuler",
                        text: `Annuler`,
                        type: "error"
                    })
                })
           })
        })
        ,
        t("#backup-success").click(function() {
            Swal.fire({
                title: "Sauvegade des Donnees !",
                text: "Sauvegarder avec succes !",
                type: "success",
                confirmButtonColor: "#348cd4"
            })
        });

  }
  ,
    t.SweetAlert = new e,
    t.SweetAlert.Constructor = e
}(window.jQuery)
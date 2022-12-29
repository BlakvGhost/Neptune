<div class="bht-main-header">
    <h2>Rapport des Ventes</h2>
</div>
<div class="bht-main-subheader">
    <div class="row justify-content-between fv-sm-fcol">
        <nav class="col col-auto fv-sm-col-12">
            <h5 class="text-dark border-bottom py-2 ">Soumettre les depenses du mois de Novembre</h5>
        </nav>
        <nav aria-label="breadcrumb" class="col fv-sm-col-12">
            <ol class="breadcrumb fv-justify-content-end-xl">
                <li class="breadcrumb-item"><a href="javascript:void(0)" class="btn-load" data-link="home">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)" class="btn-load" data-link="inventaire">Rapport</a></li>
                <li class="breadcrumb-item active" aria-current="page">Depenses</li>
            </ol>
        </nav>
    </div>
</div>
<div class="row">
    <div class="col-12 fv-sm-p-0">
        <div class="card cardDarked shadow">
            <div class="card-header">
                <div class="row justify-content-end">
                    <div class="col col-6 text-start align-self-center" data-bs-toggle="collapse" data-bs-target="#dep647647">
                        <h6 class="m-0 fw-bold text-primary"><i class="fa fa-chevron-down"></i>&nbsp;&nbsp; Les Dépenses Effectuer avec les produits au Magasin</h6>
                    </div>
                    <div class="col col-6 text-end">
                        <a href="javascript:void(0)" id="creatMoreField" class="btn btn-secondary"><i class="fa fa-plus-circle" title="ter un nouveau champs de saisie"></i></a>
                    </div>
                </div>
           </div>
            <div class="card-body" id="dep647647">
                <form action="/" data-action="/pages" class="form fv-sm-form container-fluid dataForm" enctype="multipart/form-data" method="post">
                    <div id="fieldsContainer">
                        <div class="row my-3 fv-m-0 row-cols-2 fieldToPrint">
                            <div class="input-group input-group-lg w-75 col">
                                <label for="id_name" class="input-group-text fv-sm-w-100">Nom du Produit</label>
                                <div class="col h-100 input-group-lg position-relative suggests" data-bht-unit="rlx" data-bht-price="7800">
                                    <input name='name' type="text" id="id_name" id="produit_id" autocomplete="off" data-action="suggestion" data-table="produit" class="form-control suggestionField" aria-required aria-sugg placeholder="Selectionner le nom du produit">
                                    <div class="position-absolute top-100 w-100 start-0" style="z-index:5">
                                        <ul class="list-group suggestions"></ul>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group input-group-lg w-25 col">
                                <label for="id_quantity_d" class="input-group-text fv-sm-w-100">Quantité</label>
                                <input name='quantity' type="number" id="id_quantity_d" class="form-control" placeholder="Quantité total">
                            </div>
                            <div class="input-group input-group-lg col col-12 my-2">
                                <label for="id_date" class="input-group-text fv-sm-w-100">Date</label>
                                <input name='date' type="date" id="id_date" class="form-control">
                            </div> 
                            <div class="form-group my-2 text-center col-12">
                                <label for="id_remarque" class="form-group-text fw-bold fv-sm-w-100">Raison</label>
                                <textarea name="message" rows="3" cols="80" id="id_remarque" class="w-100" placeholder="Justifier cette depense"></textarea>
                                <small class="form-text w-100 mt-2 fst-italic" id="RemarqueHelp"><i class="fa fa-info-circle"></i>&nbsp; Facultative</small>
                            </div>
                            <div class="text-end col-12">
                                <button class="btn btn-danger input-group-btn dismiss-field fv-sm-none text-end" type="button"><i class="fas fa-trash"></i></button>
                            </div>                           
                        </div>                       
                    </div>
                    <div class="text-center mt-4">
                        <button class="btn btn-success w-50 submit" type="submit">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-12 fv-sm-p-0 my-3">
        <div class="card cardDarked shadow">
            <div class="card-header">
                <div class="row justify-content-end">
                    <div class="col col-6 text-start align-self-center" data-bs-toggle="collapse" data-bs-target="#dep697647">
                        <h6 class="m-0 fw-bold text-primary"><i class="fa fa-chevron-down"></i>&nbsp;&nbsp; Autres Dépenses</h6>
                    </div>
                    <div class="col col-6 text-end">
                        <a href="javascript:void(0)" id="creatMoreField" class="btn btn-secondary "><i class="fa fa-plus-circle" title="ter un nouveau champs de saisie"></i></a>
                    </div>
                </div>
           </div>
            <div class="card-body collapse" id="dep697647">
                <form action="/" data-action="/pages" class="form fv-sm-form container-fluid dataForm" enctype="multipart/form-data" method="post">
                    <div id="fieldsContainer">
                        <div class="row my-3 fv-m-0 row-cols-2 fieldToPrint">
                            <div class="input-group input-group-lg w-75 col">
                                <label for="id_name" class="input-group-text fv-sm-w-100">Object de la depense</label>
                                <div class="col h-100 input-group-lg position-relative suggests">
                                    <input class="form-control" name='name' type="text" id="id_name" id="produit_id" placeholder="Entrer l'object de la depense">                
                                </div>
                            </div>
                            <div class="input-group input-group-lg w-25 col">
                                <label for="id_quantity_d" class="input-group-text fv-sm-w-100">Quantité</label>
                                <input name='quantity' type="number" id="id_quantity_d" class="form-control" placeholder="Quantité total">
                            </div>
                            <div class="row col col-12 row-cols-2 my-3">
                                <div class="input-group input-group-lg col w-50">
                                    <label for="id_price" class="input-group-text fv-sm-w-100">Prix Unitaire</label>
                                    <input name='quantity' type="number" id="id_price" class="form-control smwp" placeholder="Entrer le Prix Unitaire">
                                    <small class="input-group-text">FCFA</small>
                                </div>
                                <div class="input-group input-group-lg col w-50">
                                    <label for="id_date" class="input-group-text fv-sm-w-100">Date</label>
                                    <input name='date' type="date" id="id_date" class="form-control">
                                </div>
                            </div>  
                            <div class="form-group my-2 text-center col-12">
                                <label for="id_remarque" class="form-group-text fw-bold fv-sm-w-100">Raison</label>
                                <textarea name="message" rows="3" cols="80" id="id_remarque" class="w-100" placeholder="Justifier cette depense"></textarea>
                                <small class="form-text w-100 mt-2 fst-italic" id="RemarqueHelp"><i class="fa fa-info-circle"></i>&nbsp; Facultative</small>
                            </div>
                            <div class="text-end col-12">
                                <button class="btn btn-danger input-group-btn dismiss-field fv-sm-none text-end" type="button"><i class="fas fa-trash"></i></button>
                            </div>                           
                        </div>                       
                    </div>
                    <div class="text-center mt-4">
                        <button class="btn btn-success w-50 submit" type="submit">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="/static/js/page.init.js"></script>
<script type="text/javascript" src="/static/js/proformat.js"></script>
<script type="text/javascript">
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "700",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };
    toastr['info']("Renseiger bien les depenses pour un meilleur rapport de fin de mois de <?= date('M') ?> ","Rappel");
</script>
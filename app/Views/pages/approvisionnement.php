<div class="bht-main-header">
    <h2>Les Produits au magasin</h2>
</div>
<div class="bht-main-subheader">
    <div class="row justify-content-between fv-sm-fcol">
        <nav class="col col-auto fv-sm-col-12">
            <h5 class="text-dark border-bottom py-2">Approvisionnement des produits</h5>
        </nav>
        <nav aria-label="breadcrumb" class="col fv-sm-col-12">
            <ol class="breadcrumb fv-justify-content-end-xl">
                <li class="breadcrumb-item"><a href="javascript:void(0)" class="btn-load" data-link="home">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)" class="btn-load" data-link="produit">Produits</a></li>
                <li class="breadcrumb-item active" aria-current="page">Approvisionnement</li>
            </ol>
        </nav>
    </div>
</div>
<div class="row">
    <div class="col-12 fv-sm-p-0">
        <div class="card cardDarked">
            <div class="card-body">
                <div class="alert alert-dismissible d-none" role="alert" id="formSuccess">
                    <h6><strong></strong><span class="fw-bold category_name"></span></h6>
                    <div class="msg"></div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <form action="/appro" data-action="/pages" class="form fv-sm-form container-fluid dataForm" enctype="multipart/form-data" method="post">
                    <div class="row justify-content-end">
                        <div class="col col-6 text-start fv-sm-none">
                            <a href="javascript:void(0)" class="btn btn-secondary disabled">Cliquer sur <i class="fa fa-plus-circle"> pour creer d'autre champs de saisie</i></a>
                        </div>
                        <div class="col col-6 text-end">
                            <a href="javascript:void(0)" id="creatMoreField" class="btn btn-secondary"><i class="fa fa-plus-circle" title="Ajouter un nouveau champs de saisie"></i></a>
                        </div>
                    </div>
                    <input type="hidden" class="suggests">
                    <div id="fieldsContainer">
                        <div class="row my-3 fv-m-0 row-cols-2 fieldToPrint">
                            <div class="input-group input-group-lg w-75 col">
                                <label for="id_name" class="input-group-text fv-sm-w-100">Nom du Produit</label>
                                <div class="col h-100 input-group-lg position-relative suggests" data-bht-unit="rlx">
                                    <input name='name[]' type="text" id="id_name" id="produit_id" autocomplete="off" data-action="suggestion" data-table="produit" class="form-control suggestionField" placeholder="Entrer le nom du produit" aria-sugg aria-required>
                                    <div class="position-absolute top-100 w-100 start-0" style="z-index:5">
                                        <ul class="list-groups suggestions"></ul>
                                    </div>
                                </div>
                                <input name="id[]" type="hidden" id="id_product">
                            </div>
                            <div class="input-group input-group-lg w-25 col">
                                <label for="id_quantity_d" class="input-group-text fv-sm-w-100">Quantité</label>
                                <input name='totalStock[]' type="number" id="id_quantity_d" aria-required class="form-control smwp" placeholder="Quantité total">
                                <button class="btn btn-danger input-group-btn dismiss-field " type="button"><i class="fas fa-trash"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <button class="btn btn-success w-50 submit" type="submit">Mettre à jour</button>
                    </div>
                </form>          
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="/static/js/page.init.js"></script>
<script type="text/javascript" src="/static/js/proformat.js"></script>
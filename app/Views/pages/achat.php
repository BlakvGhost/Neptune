<div id="contain" class="d-none position-relative" aria-description="Facture" data-type="facture"></div>
<div class="facture">
      <div class="modal fade" id="factureModal" tabindex="-1" aria-labelledby="factureModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content cardDarked">
            <div class="modal-header">
              <h5 class="modal-title" id="factureModalLabel">Facture effectuer à <?= date('H:i:s'); ?></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <div class="list-group">
                    <div class="list-group-item list-group-item-control text-start bg-light activeArrow">Nom du client: <span class="fw-bold" id="modalClientName"></span></div>
                    <div class="list-group-item list-group-item-control text-start bg-light activeArrow">Contact du client: <span class="fw-bold" id="modalClientContact"></span></div>
                </div>
              <div class="" id="printableTable">
                <table class="table text-center table-light text-secondary rounded table-bordered table-striped table-hover">
                  <thead>
                      <tr>
                          <th>#</th>
                          <th>Designation</th>
                          <th>Unité</th>
                          <th>Qté</th>
                          <th>Prix Unitaire</th>
                          <th>Montant Total</th>
                      </tr>
                      </thead>
                      <tbody id="proformatGroup"></tbody>
                      <tfoot>
                          <tr>
                              <th colspan="6" class="text-end"><span class="fw-bold">Prix Total : </span> <span id="displayTotalPrice" class="filter" aria-filter></span></th>
                          </tr>
                      </tfoot>
                  </table>
              </div>
              <div class="my-3">
                <button type="button" class="btn btn-success" id="btn-print">Imprimer</button>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Annuler</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<div class="bht-main-header">
    <h2>Les Produits au magasin</h2>
</div>
<div class="bht-main-subheader">
    <div class="row justify-content-between fv-sm-fcol">
        <nav class="col col-auto fv-sm-col-12">
            <h5 class="text-dark border-bottom py-2">Enregistrer un achat</h5>
        </nav>
        <nav aria-label="breadcrumb" class="col fv-sm-col-12">
            <ol class="breadcrumb fv-justify-content-end-xl">
                <li class="breadcrumb-item"><a href="javascript:void(0)" class="btn-load" data-link="home">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)" class="btn-load" data-link="ventes">Ventes</a></li>
                <li class="breadcrumb-item active" aria-current="page">Nouvelle</li>
            </ol>
        </nav>
    </div>
</div>
<div class="p-2">
    <div class="row">
        <div class="col-12 fv-sm-p-0">
            <div class="card cardDarked">
                <div class="card-body">
                    <div class="alert alert-dismissible d-none" role="alert" id="formSuccess">
                        <h6><strong></strong><span class="fw-bold category_name"></span></h6>
                        <div class="msg"></div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <form action="/vente_add" data-action="/pages" class="form fv-sm-form container-fluid dataForm" enctype="multipart/form-data" method="post">
                        <div class="row justify-content-end">
                            <div class="col col-6 text-start fv-sm-none">
                                <a href="javascript:void(0)" class="btn btn-secondary disabled">Cliquer sur <i class="fa fa-plus-circle"> pour creer d'autre champs de saisie</i></a>
                            </div>
                            <div class="col col-6 text-end">
                                <a href="javascript:void(0)" id="creatMoreField" class="btn btn-secondary"><i class="fa fa-plus-circle" title="Ajouter un nouveau champs de saisie"></i></a>
                            </div>
                        </div>
                        <input name='id_customer' type="hidden" id="id_customer">
                        <input name='type' type="hidden" id="type" value="ventes">
                        <input name='id_user' type="hidden" value="<?= session()->get('id')?>">
                        <div class="row my-3 fv-m-0 row-cols-2">
                            <div class="input-group input-group-lg fv-my-3 w-50 col">
                                <label for="id_names" class="input-group-text fv-sm-w-100">Nom du Client</label>
                                <div class="col h-100 input-group-lg position-relative suggests">
                                    <input name='names' type="text" autocomplete='off' id="id_names" data-action='suggestion' data-table='customers' class="form-control customersField" placeholder="Entrer le nom du client" aria-required>
                                    <div class="position-absolute top-100 w-100 start-0" style="z-index:5">
                                        <ul class="list-group suggestions"></ul>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group input-group-lg w-50 col">
                                <label for="id_contact" class="input-group-text fv-sm-w-100">Contact du Client</label>
                                <input name='contact' type="text" id="id_contact" class="form-control" placeholder="Entrer le Contact du client">
                            </div>
                        </div>
                        <div class="" id="fieldsContainer">
                            <div class="row my-3 fv-m-0 row-cols-2 fieldToPrint">
                                <div class="input-group input-group-lg w-75 col">
                                    <label for="id_name" class="input-group-text fv-sm-w-100">Nom du Produit</label>
                                    <div class="col h-100 input-group-lg position-relative suggests" data-bht-unit="rlx" data-bht-price="0">
                                        <input name='name[]' type="text" id="id_name" id="produit_id" autocomplete="off" aria-sugg aria-requied="true" data-action="suggestion" data-table="produit" class="form-control suggestionField" placeholder="Entrer le nom du produit">
                                        <div class="position-absolute top-100 w-100 start-0" style="z-index:5">
                                            <ul class="list-group suggestions"></ul>
                                        </div>
                                    </div>
                                    <input name="id_produit[]" type="hidden" id="id_product">
                                </div>
                                <div class="input-group input-group-lg w-25 col">
                                    <label for="id_quantity" class="input-group-text fv-sm-w-100">Quantité</label>
                                    <input name='quantity[]' type="number" id="id_quantity" class="form-control smwp" aria-required placeholder="Quantité total">
                                    <button class="btn btn-danger input-group-btn dismiss-field" type="button"><i class="fas fa-trash"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="text-center my-3 fv-sm-row">
                            <button class="btn btn-primary fw-bold fw-xl-w-25 fv-sm-col-6 " type="button" data-bs-toggle="modal" data-bs-target="#factureModal" id="voirFacureBtn">Voir Facture</button>
                            <button class="btn btn-success fw-bold fw-xl-w-25 submit fv-sm-col-6" type="submit">Enregistrer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/static/js/print.js" charset="utf-8" ></script>
<script type="text/javascript" src="/static/js/page.init.js"></script>
<script type="text/javascript" src="/static/js/proformat.js"></script>

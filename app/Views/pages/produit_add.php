<div class="bht-main-header">
    <h2>Les Produits au magasin</h2>
</div>
<div class="bht-main-subheader">
    <div class="row justify-content-between fv-sm-fcol">
        <nav class="col col-auto fv-sm-col-12">
            <h5 class="text-dark border-bottom py-2 fw-bold">Ajouter un produit</h5>
        </nav>
        <nav aria-label="breadcrumb" class="col fv-sm-col-12">
            <ol class="breadcrumb fv-justify-content-end-xl">
                <li class="breadcrumb-item"><a href="javascript:void(0)" class="btn-load" data-link="home">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)" class="btn-load" data-link="produit">Produits</a></li>
                <li class="breadcrumb-item active" aria-current="page">Ajouter</li>
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
                <form action="/product_add" class="form row container-fluid row-cols-2 dataForm fv-sm-fcol fv-sm-form" enctype="multipart/form-data" method="post">
                    <section class="col col-9 p-2 fv-sm-col-12">
                        <input type="hidden" name="action" value='addProduct'>
                        <div class="input-group input-group-lg my-3">
                            <label for="id_nom" class="input-group-text">Nom du Produit</label>
                            <input name='name' type="text" class="form-control" id="id_nom" placeholder="Nom du Produit" aria-required="true">
                        </div>
                        <div class="row my-3 row-cols-2 fv-sm-fcol">
                            <div class="input-group input-group-lg w-50 col">
                                <label for="id_cat" class="input-group-text">Categorie</label>
                                <select name='category_id' class="form-select" id="id_cat" aria-required="true">
                                    <option value="0" disabled>-----Select One-----</option>
                                    <?php if($status == 200): ?>
                                        <?php foreach ($data as $category):?>
                                            <option value="<?=$category['id']?>"><?=$category['category']?></option>
                                        <?php endforeach;?>
                                    <?php endif;?>
                                </select>
                            </div>
                            <div class="input-group input-group-lg w-50 col">
                                <label for="id_made_by" class="input-group-text">Fabriquant</label>
                                <input name='manufacturer' type="text" id="id_made_by" class="form-control" placeholder="Fabriquant du Produit" data-ariaError="Entrer une Categorie">
                            </div>
                        </div>
                        <div class="row my-3 fv-sm-fcol">
                            <div class="input-group input-group-lg col w-50">
                                <label for="id_price_one" class="input-group-text">FCFA</label>
                                <input name='price' type="number" id="id_price_one" class="form-control" placeholder="Prix unitaire" aria-required="true">
                                <span class="input-group-text fv-sm-none">.00</span>
                            </div>
                            <div class="input-group input-group-lg col-auto w-50">
                                <label for="id_stock_total" class="input-group-text">Stock Total</label>
                                <input name='totalStock' type="number" id="id_stock_total" class="form-control" placeholder="Total Disponible en Stock" aria-required="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea name="description" id="id_desc" cols="30" rows="7" class="form-control" placeholder="Une description facultative du Produit"></textarea>
                        </div>
                    </section>
                    <section class="col fv-xl-bs right-form fw-xl-w-25 fv-sm-col-12 fv-sm-boder-none">
                        <div class="my-3">
                            <div class="input-group form-check form-switch flex-nowrap input-group-lg p-0">
                                <label for="id_isVisible" class="input-group-text w-100">Mettre en Vente</label>
                                <button class="input-group-btn btn btn-outline-dark" type="button"><input type="checkbox" name="state" id="id_isVisible" class="form-check-input ms-0"> </button>
                            </div>
                            <small class="text-muted w-100 form-text fst-italic text-center">
                                <i class="fa fa-info-circle">&nbsp;&nbsp;</i>
                                <span>Selectionner pour effectuer les operations sur le produit ou laisser pour envoyer dans le brouillons</span>
                            </small>
                        </div>
                        <input type="hidden" name='user_id' value='<?=1?>'>
                        <div class="text-center mt-4">
                            <button class="btn btn-success w-100 submit" type="submit">Ajouter</button>
                        </div>

                    </section>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="/static/js/page.init.js"></script>
<script type="module" src="/static/js/form.js"></script>

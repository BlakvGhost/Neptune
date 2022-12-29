<div id="contain" class="d-none" aria-description="Total de vente de <?= $product_name?>"></div>
<div class="bht-main-header">
    <h2>Les Produits au magasin</h2>
</div>
<div class="bht-main-subheader">
    <div class="row justify-content-between fv-sm-fcol">
        <nav class="col col-auto fv-sm-col-12">
            <h5 class="text-dark border-bottom py-2 fw-bold">Details de Vente de <?= $product_name?> </h5>
        </nav>
        <nav aria-label="breadcrumb" class="col fv-sm-col-12">
            <ol class="breadcrumb fv-justify-content-end-xl">
                <li class="breadcrumb-item"><a href="javascript:void(0)" class="btn-load" data-link="home">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)" class="btn-load" data-link="produit">Produit</a></li>
                <li class="breadcrumb-item active" aria-current="page">Details</li>
            </ol>
        </nav>
    </div>
</div>
<div class="p-2">
    <div class="row">
        <div class="col-12 fv-sm-p-0">
            <div class="card cardDarked">
                <div class="card-body">
                    <div class="row justify-content-between my-3 fv-sm-fcol fv-sm-freverse">
                        <div class="col btn-group col-3 fw-sm-w-100" id="manageTable">
                            <button class="btn btn-secondary btn-print" id="btn-print"><span>Imprimer</span></button>
                            <button class="btn btn-secondary btn-excel"><span>Excel</span></button>
                            <button class="btn btn-secondary btn-pdf"><span>PDF</span></button>
                        </div>
                        <div class="col col-5 fw-sm-w-100 fv-my-3">
                            <form action="" method="post">
                                <div class="input-group">
                                    <input class="form-control" type="search" id="id_sort" placeholder="Trier par nom de vendeur" aria-label="Search...">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="table-responsive" id="printableTable">
                        <table class="table text-center table-light text-secondary rounded table-bordered table-hover fv-table table-striped" data-table-sort="4">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Date de Vente</th>
                                <th>Vendeur</th>
                                <th>Prix</th>
                                <th>Quantité</th>
                                <th>Prix Total</th>
                                <th class="noprint">Details Client</th>
                                <th class="noprint">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if($status == 200): ?>
                            <?php $i = 1 ?>
                            <?php foreach ($data as $key => $value): ?>
                                <tr data-fv-customerName='<?=$value['customer_name']?>' data-fv-shoppingDate='<?=$value['shopping_date']?>' data-fv-customerContact='<?=$value['customer_contact']?>'>
                                    <td><?=$i?></td>
                                    <td><?=$value['shopping_date']?></td>
                                    <td class="sortCol"><?=$value['user']?></td>
                                    <td aria-filter data-val='<?=$value['price']?>'></td>
                                    <td><?=$value['quantity']?></td>
                                    <td aria-filter data-val="<?=$value['total']?>"></td>
                                    <td class="noprint"><button class="btn btn-success showUserModal" title="Voir le Detail du client" data-bs-toggle="modal" data-bs-target="#customerInfo"><i class="fa fa-eye"></i></button></td>
                                    <td class="noprint">
                                        <button class="btn btn-danger confirmDelete" title="Supprimer <?=$value['product_name']?>" data-bht-produit=""><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <?php $i ++ ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="border-top row p-2 fv-sm-freverse fv-sm-fcol my-3">
        <nav class="text-dark col col-lg-6 col-sm-12 fv-sm-text-center">
            <p>Affichage de <span class="currentPage fw-bold"></span> pages sur <span class="totalPage fw-bold"></span>.</p>
        </nav>
        <nav class="col col-lg-6 col-sm-12">
            <ul class="pagination justify-content-lg-end fv-justify-content-center-sm"></ul>
        </nav>
    </div>
</div>
<script src="/static/js/print.js" charset="utf-8" ></script>
<script src="/static/js/table.js" charset="utf-8" ></script>
<script type="text/javascript" src="/static/js/page.init.js"></script>

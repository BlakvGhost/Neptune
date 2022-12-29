<div id="contain" class="d-none" aria-description="Total des produits au magasin"></div>
<div class="bht-main-header">
    <h2>Les Produits au magasin</h2>
</div>
<div class="bht-main-subheader">
    <div class="row justify-content-between fv-sm-fcol">
        <nav class="col col-auto fv-sm-col-12">
            <h5 class="text-dark border-bottom py-2 fw-bold">Voir les produits </h5>
        </nav>
        <nav aria-label="breadcrumb" class="col fv-sm-col-12">
            <ol class="breadcrumb fv-justify-content-end-xl">
                <li class="breadcrumb-item"><a href="javascript:void(0)" class="btn-load" data-link="home">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)" class="btn-load" data-link="produit">Produits</a></li>
                <li class="breadcrumb-item active" aria-current="page">Voir</li>
            </ol>
        </nav>
    </div>
</div>
<div class="p-2">
    <div class="row">
        <div class="col-12 fv-sm-p-0">
            <div class="card cardDarked">
                <div class="card-body">
                    <div class="row justify-content-end">
                        <div class="col col-6 text-end">
                            <a href="javascript:void(0)" class="btn-load btn btn-dark" data-link="produit_add"><i class="fa fa-plus-circle" title="Ajouter un nouveau produit au magasin"></i></a>
                        </div>
                    </div>
                    <div class="row justify-content-between my-3 fv-sm-fcol fv-sm-freverse">
                        <div class="col btn-group col-3 fw-sm-w-100" id="manageTable">
                            <button class="btn btn-secondary btn-print" id="btn-print"><span>Imprimer</span></button>
                            <button class="btn btn-secondary btn-excel"><span>Excel</span></button>
                            <button class="btn btn-secondary btn-pdf"><span>PDF</span></button>
                        </div>
                        <div class="col col-5 fw-sm-w-100 fv-my-3">
                            <form action="" method="post">
                                <div class="input-group">
                                    <input class="form-control" type="search" id="id_sort" placeholder="Trier par nom d'article" aria-label="Search...">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="table-responsive" id="printableTable">
                        <table class="table text-center table-light text-secondary rounded table-bordered table-hover fv-table table-striped" data-table-sort="10">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom du Produit</th>
                                <th>Prix</th>
                                <th>Total Stock</th>
                                <th>Reste Stock</th>
                                <th>Total Vendu(J)</th>
                                <th>Total Vendu(T)</th>
                                <th class="noprint">Details Ventes</th>
                                <th class="noprint">Action</th>
                            </tr>
                        </thead>
                            <tbody>
                            <?php $i = 1?>
                            <?php foreach($data as $key => $value): ?>
                                <tr data-fv-id = '<?= $value["id"]?>' data-fv-type='produits'>
                                    <td><?=$i?></td>
                                    <td class="sortCol"><?= $value ['name'] ?></td>
                                    <td aria-filter data-val="<?= $value ['price'] ?>"></td>
                                    <td><?= $value ['totalStock'] ? $value ['totalStock'] : 0 ?></td>
                                    <td><?= $value ['reste'] ? $value ['reste'] : 0 ?></td>
                                    <td><?= $value ['today'] ? $value ['today'] : 0 ?></td>
                                    <td><?= $value ['vendus'] ? $value ['vendus'] : 0 ?></td>
                                    <td class="noprint"><a href="javascript:void(0)" role="button" class="btn btn-success btn-load" data-link="detail_vente" data-bht-action ='crud' data-bht-id = "<?= $value['id']?>" title="Voir le Detail des Ventes de <?= $value['name'] ?>"><i class="fa fa-eye"></i></a></td>
                                    <td class="noprint">
                                        <button href="javascript:void(0)" role="button" class="btn btn-success btn-load" data-link='produit_update' data-bht-action ='crud' data-bht-id = "<?= $value['id']?>" title="Editer <?= $value['name'] ?>"><i class="fa fa-edit"></i></button>
                                        <button class="btn btn-danger confirmDelete" data-bht-produit="<?= $value['name'] ?>" title="Supprimer <?= $value['name'] ?>"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <?php $i ++ ?>
                            <?php endforeach; ?>
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
<div id="contain" class="d-none" aria-description="Liste des clients"></div>
<div class="bht-main-header">
    <h2>Liste des clients</h2>
</div>
<div class="bht-main-subheader">
    <div class="row justify-content-between fv-sm-fcol fv-sm-freverse">
        <nav class="col col-auto fv-sm-col-12">
            <h5 class="text-dark border-bottom py-2 fw-bold">Voir les clients</h5>
        </nav>
        <nav aria-label="breadcrumb" class="col fv-sm-col-12">
            <ol class="breadcrumb fv-justify-content-end-xl">
                <li class="breadcrumb-item"><a href="javascript:void(0)" class="btn-load" data-link="home">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Clients</li>
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
                            <button class="btn btn-secondary btn-print"><span>Imprimer</span></button>
                            <button class="btn btn-secondary btn-excel"><span>Excel</span></button>
                            <button class="btn btn-secondary btn-pdf"><span>PDF</span></button>
                        </div>
                        <div class="col col-5 fw-sm-w-100 fv-my-3">
                            <form action="" method="post">
                                <div class="input-group">
                                    <input class="form-control" id="id_sort" type="search" placeholder="Trier par nom de client" aria-label="Search...">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="table-responsive" id="printableTable">
                        <table class="table-hover fv-table table text-center table-light text-secondary rounded table-bordered table-striped" data-table-sort="10">
                        <thead>
                            <tr>
                                <th>N°</th>
                                <th>Noms</th>
                                <th>Contact</th>
                                <th>Nombre d'achat</th>
                                <th>Prix Total</th>
                                <th>Dernier Achat</th>
                                <th class="noprint">Supprimer</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1 ?>
                        <?php foreach ($data as $key => $customer):?>
                            <tr data-fv-id = '<?= $customer["id"]?>' data-fv-type='customers'>
                                <td><?=$i?></td>
                                <td class="sortCol"><?= ucfirst($customer['names']) ?></td>
                                <td><?= $customer['contact']?></td>
                                <td><?= $customer['nbAchat']?></td>
                                <td aria-filter data-val="<?= 170000 ?>"></td>
                                <td><?= $customer['last_shopping_date'] ?></td>
                                <td class="noprint"><button class="btn btn-danger confirmDelete" title="Supprimer le clients <?= $customer['names'] ?>" data-bht-produit="<?= $customer['names'] ?>"><i class="fa fa-trash"></i></button></td>
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

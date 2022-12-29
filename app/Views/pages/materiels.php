<div id="contain" class="d-none" aria-description="Total des Biens Materiels"></div>
<div class="bht-main-header">
    <h2 class="">Biens Materiels</h2>
</div>
<div class="bht-main-subheader">
    <div class="row justify-content-between fv-sm-fcol fv-sm-freverse">
        <nav class="col col-auto fv-sm-col-12">
            <h5 class="text-dark border-bottom py-2">Ajouter un Biens Materiels</h5>
        </nav>
        <nav aria-label="breadcrumb" class="col fv-sm-col-12">
            <ol class="breadcrumb fv-justify-content-end-xl">
                <li class="breadcrumb-item"><a href="javascript:void(0)" class="btn-load" data-link="home">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)" class="btn-load" data-link="materiels">Biens Materiels</a></li>
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
                            <a href="javascript:void(0)" class="btn-load btn btn-dark" data-link="prospere_add"><i class="fa fa-plus-circle" title="Enregistrer un nouveau bien materiel"></i></a>
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
                                    <input class="form-control" type="search" id="id_sort" placeholder="Trier par object" aria-label="Search...">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="table-responsive" id="printableTable">
                        <table class="table text-center table-light text-secondary rounded table-bordered table-hover fv-table table-striped" data-table-sort="8">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Object</th>
                                <th>Categorie</th>
                                <th>Qté</th>
                                <th>Manquant</th>
                                <th>Reste</th>
                                <th>Date d'ajout</th>
                                <th>Utilisation</th>
                                <th class="noprint">Supprimer</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i=1;$i<25;$i++): ?>
                                <tr>
                                    <td><?=$i?></td>
                                    <td class="sortCol"><?= 'Chaise' ?></td>
                                    <td><?= 'Immobilier' ?></td>
                                    <td><?=$i*2?></td>
                                    <td><?= '3' ?></td>
                                    <td><?= 2 ?></td>
                                    <td><?= date('Y-m-d') ?></td>
                                    <td><?= 'Null' ?></td>
                                    <td class="noprint"><button class="btn btn-danger confirmDelete" title="Supprimer l'avis de <?= '' ?>" data-bht-produit="l'avis de <?= '' ?>"><i class="fa fa-trash"></i></button></td>
                                </tr>
                            <?php endfor;?>
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

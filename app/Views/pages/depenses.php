<div class="bht-main-header">
    <h2>Rapport des Ventes</h2>
</div>
<div class="bht-main-subheader">
    <div class="row justify-content-between fv-sm-fcol">
        <nav class="col col-auto fv-sm-col-12">
            <h5 class="text-dark border-bottom py-2 fw-bold">Rapport Generale des Depenses Enregistrees</h5>
        </nav>
        <nav aria-label="breadcrumb" class="col fv-sm-col-12">
            <ol class="breadcrumb fv-justify-content-end-xl">
                <li class="breadcrumb-item"><a href="javascript:void(0)" class="btn-load" data-link="home">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)" class="btn-load" data-link="produit">Rapport</a></li>
                <li class="breadcrumb-item active" aria-current="page">Depenses</li>
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
                        <div class="col col-4 fw-sm-w-100">
                            <h5>Trier par une Annee ou un Mois</h5>
                        </div>
                        <div class="col col-6 fw-sm-w-100">
                            <form action="" class="row form row-cols-2">
                                <div class="col">
                                    <select name="year" id="id_year" class="form-select">
                                        <option value="default">Selectionner une annee </option>
                                        <?php for ($i=0;$i<5;$i++): ?>
                                            <option value="202<?= $i; ?>">202<?= $i; ?></option>
                                        <?php endfor;?>
                                    </select>
                                </div>
                                <div class="col">
                                    <select name="month" id="id_month" class="form-select">
                                        <option value="default">Selectionner un mois</option>
                                        <?php for ($i=1;$i<=12;$i++): ?>
                                            <option value="<?= $i; ?>"><?= $i; ?></option>
                                        <?php endfor;?>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row justify-content-between my-3 fv-sm-fcol fv-sm-freverse">
                        <div class="col btn-group col-3 fw-sm-w-100" id="manageTable">
                            <button class="btn btn-secondary btn-print"><span>Imprimer</span></button>
                            <button class="btn btn-secondary btn-excel"><span>Excel</span></button>
                            <button class="btn btn-secondary btn-pdf"><span>PDF</span></button>
                        </div>
                        <div class="col col-5 fw-sm-w-100 fv-my-3">
                            <form action="" method="post">
                                <div class="input-group">
                                    <input class="form-control" type="search" id="id_sort" placeholder="Trier par libelle" aria-label="Search...">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-center table-light text-secondary rounded table-striped table-bordered table-hover fv-table" data-table-sort="10">
                            <thead>
                                 <tr>
                                    <th rowspan="2">#</th>
                                    <th rowspan="2">Libellé</th>
                                    <th rowspan="2">Qté</th>
                                    <th colspan="2">Prix</th>
                                    <th rowspan="2">Justification</th>
                                    <th rowspan="3">Date</th>
                                </tr>
                                <tr>
                                    <th>Unitaire</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i=1;$i<15;$i++): ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td class="sortCol"><?= 'Ampoule LED 20W' ?></td>
                                        <td><?= $i+3 ?></td>
                                        <td><?= $i.'500' ?> FCFA</td>
                                        <td><?= ($i+3)*3500 ?> FCFA</td>
                                        <td><?= "Utilisée dans la boutique pour l'eclairage interne" ?></td>
                                        <td><?= date('Y-m-d H:i:s') ?></td>
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
<script src="/static/js/table.js" charset="utf-8" ></script>
<script type="text/javascript" src="/static/js/page.init.js"></script>

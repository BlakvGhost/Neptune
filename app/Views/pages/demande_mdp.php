<div class="bht-main-header">
    <h2>Les Comptes d'utilisateurs</h2>
</div>
<div class="bht-main-subheader">
    <div class="row justify-content-between fv-sm-fcol">
        <nav class="col col-auto fv-sm-col-12">
            <h5 class="text-dark border-bottom py-2 fw-bold">Les demandes de reinitialisation de mot de passe</h5>
        </nav>
        <nav aria-label="breadcrumb" class="col fv-sm-col-12">
            <ol class="breadcrumb fv-justify-content-end-xl">
                <li class="breadcrumb-item"><a href="javascript:void(0)" class="btn-load" data-link="home">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)" class="btn-load" data-link="home">Utilisaturs</a></li>
                <li class="breadcrumb-item active" aria-current="page">Restore</li>
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
                                    <input class="form-control" type="search" id="id_sort" placeholder="Trier par nom de produit ..." aria-label="Search...">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-center table-light text-secondary rounded table-bordered table-hover fv-table table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Role</th>
                                <th>Heure de la demande</th>
                                <th>Motif</th>
                                <th>Date de la derniere connexion</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php for ($i =1;$i<10;$i++):?>
                                <tr data-fv-id="0" data-fv-type="users">
                                    <td><?=$i?></td>
                                    <td><?= 'Morgan' ?></td>
                                    <td class="sortCol"><?= 'Freeman' ?></td>
                                    <td><?= 'Standard' ?></td>
                                    <td><?= date('Y-m-d H:i:s') ?></td>
                                    <td><?= 'Unknown raison' ?></td>
                                    <td><?= date('Y-m-d H:i:s') ?></td>
                                    <td>
                                        <button href="javascript:void(0)" role="button" class="btn btn-success confirmPass" data-fv-person="Morgan Freeman" title="Valider la demande"><i class="fa fa-check-circle"></i></button>
                                        <button class="btn btn-danger confirmDelete" title="Supprimer la demande de  <?= 'Morgan Freeman' ?>" data-bht-produit="<?= 'Demande de Morgan Freeman' ?>"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            <?php endfor; ?>
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

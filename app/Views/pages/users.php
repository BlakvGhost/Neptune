<div id="contain" class="d-none" aria-description="Liste des comptes utilisateurs"></div>
<div class="bht-main-header">
    <h2>Les Comptes d'utilisateurs</h2>
</div>
<div class="bht-main-subheader">
    <div class="row justify-content-between fv-sm-fcol">
        <nav class="col col-auto fv-sm-col-12">
            <h5 class="text-dark border-bottom py-2 fw-bold">Voir les comptes d'utilisateurs</h5>
        </nav>
        <nav aria-label="breadcrumb" class="col fv-sm-col-12">
            <ol class="breadcrumb fv-justify-content-end-xl">
                <li class="breadcrumb-item"><a href="javascript:void(0)" class="btn-load" data-link="home">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Utilisateurs</li>
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
                            <button class="btn btn-secondary btn-print"><span>Imprimer</span></button>
                            <button class="btn btn-secondary btn-excel"><span>Excel</span></button>
                            <button class="btn btn-secondary btn-pdf"><span>PDF</span></button>
                        </div>
                        <div class="col col-5 fw-sm-w-100 fv-my-3">
                            <form action="" method="post">
                                <div class="input-group">
                                    <input class="form-control" type="search" id="id_sort" placeholder="Trier par prénom ..." aria-label="Search...">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="table-responsive" id="printableTable">
                        <table class="table text-center table-light text-secondary rounded table-bordered table-hover fv-table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Date d'inscription</th>
                                <th>Date de la derniere connexion</th>
                                <th class="noprint">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1 ?>
                        <?php foreach ($data as $key => $users):?>
                            <tr data-fv-id = '<?= $users["id"]?>' data-fv-type='users'>
                                <td><?=$i?></td>
                                <td><?= $users['name'] ?></td>
                                <td class="sortCol"><?= ucfirst($users['surname']) ?></td>
                                <td><?= ucfirst($users['role']) ?></td>
                                <td><?= $users['status'] == true ? 'Connecté' : 'Déconnecté' ?></td>
                                <td><?= $users['registry_date'] ?></td>
                                <td><?= $users['last_login'] ?></td>
                                <td  class="noprint">
                                    <button href="javascript:void(0)" role="button" class="btn btn-success btn-load" data-link="user_update" data-bht-action="crud" data-bht-id="<?= $users['id'] ?>" title="Editer le compte "><i class="fa fa-edit"></i></button>
                                    <button class="btn btn-danger confirmDelete" title="Supprimer le compte <?= $users['name'] ?>" data-bht-produit="<?= $users['name'] ?>"><i class="fa fa-trash"></i></button>
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

<div class="bht-main-header">
    <h2>Les Comptes d'utilisateurs</h2>
</div>
<div class="bht-main-subheader">
    <div class="row justify-content-between fv-sm-fcol">
        <nav class="col col-auto fv-sm-col-12">
            <h5 class="text-dark border-bottom py-2 fw-bold">Profile Utilisateur</h5>
        </nav>
        <nav aria-label="breadcrumb" class="col fv-sm-col-12">
            <ol class="breadcrumb fv-justify-content-end-xl">
                <li class="breadcrumb-item"><a href="javascript:void(0)" class="btn-load" data-link="home">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)" class="btn-load" data-link="users">Utilisateurs</a></li>
                <li class="breadcrumb-item active" aria-current="page">Profile</li>
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
                <form action="/account_update" class="form fv-sm-form container-fluid row row-cols-2 fv-sm-fcol dataForm" enctype="multipart/form-data" method="post">
                    <div class="col col-6 fv-sm-col-12">
                        <div class="my-2 fv-sm-text-center">
                            <div class="rounded fv-sm-auto text-center text-secondary" style="height:120px;width: 120px;border: 3px solid #1a2942;padding: 3%;">
                                <i class="fa fa-user" style="font-size:6rem;"></i>
                            </div>
                            <small class="text-muted"><i class="fa fa-info-circle"></i>&nbsp; Cliquer sur l'image pour modifier</small>
                        </div>
                        <table class="table table-light fv-sm-text-center">
                            <tbody>
                                <tr>
                                    <th>Nom:</th>
                                    <td><?= session() -> get('name')?></td>
                                </tr>
                                <tr>
                                    <th>Prenom:</th>
                                    <td><?= session() -> get('surname')?></td>
                                </tr>
                                <tr>
                                    <th>Contact:</th>
                                    <td><?= session() -> get('contact')?></td>
                                </tr>
                                <tr>
                                    <th>Role:</th>
                                    <td><?= ucfirst(session() -> get('role'))?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col col-6 fv-sm-col-12 fv-xl-bs fv-sm-text-center">
                        <input name='id' type="hidden" value="<?= session() -> get('id')?>">
                        <input name='changeSession' type="hidden" value="true">
                        <h5>Modifier votre Profile</h5>
                        <div class="input-group input-group-lg my-3">
                            <label for="id_name" class="input-group-text fv-sm-w-100">Nom</label>
                            <input  name='name' type="text" id="id_name" class="form-control" placeholder="Entrer le nom" value="<?= session() -> get('name')?>">
                        </div>
                        <div class="input-group input-group-lg my-3">
                            <label for="id_surname" class="input-group-text fv-sm-w-100">Prenom</label>
                            <input name='surname' type="text" id="id_surname" class="form-control" placeholder="Entrer le prenom" value="<?= session() -> get('surname')?>">
                        </div>
                        <div class="input-group input-group-lg my-3">
                            <label for="id_email" class="input-group-text fv-sm-w-100">Contact</label>
                            <input name='email' type="text" id="id_email" class="form-control" placeholder="Entrer l'email" value="<?= session() -> get('contact')?>">
                        </div>
                        <div class="input-group input-group-lg my-3 showPass">
                            <label for="id_mdp" class="input-group-text fv-sm-w-100">Mot de Passe</label>
                            <input name='password' type="password" id="id_mdp" class="form-control smwp" placeholder="********" aria-required data-ariaerror="Vous devez entrer un mot de passe">
                            <button class="btn btn-secondary" type="button"><i class="fa fa-eye"></i> </button>
                        </div>
                        <div class="text-center my-3">
                            <button class="btn btn-success fw-bold w-50 submit" type="submit">Mettre à jour</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="/static/js/page.init.js"></script>

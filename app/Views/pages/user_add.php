<div class="bht-main-header">
    <h2>Les Comptes d'utilisateurs</h2>
</div>
<div class="bht-main-subheader">
    <div class="row justify-content-between fv-sm-fcol">
        <nav class="col col-auto fv-sm-col-12">
            <h5 class="text-dark border-bottom py-2 fw-bold">Ajouter un compte d'utilisateur &nbsp;&nbsp; <i class="fa fa-plus-circle"></i></h5>
        </nav>
        <nav aria-label="breadcrumb" class="col fv-sm-col-12">
            <ol class="breadcrumb fv-justify-content-end-xl">
                <li class="breadcrumb-item"><a href="javascript:void(0)" class="btn-load" data-link="home">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)" class="btn-load" data-link="users">Utilisateurs</a></li>
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
                <form action="/user_add" class="form fv-sm-form container-fluid dataForm" enctype="multipart/form-data" method="post">
                    <div class="row my-3 row-cols-2 fv-sm-fcol">
                        <div class="input-group input-group-lg w-50 col col-12">
                            <label for="id_name" class="input-group-text fv-sm-w-100">Nom</label>
                            <input name='name' type="text" id="id_name" class="form-control" placeholder="Entrer le nom">
                        </div>
                        <div class="input-group input-group-lg w-50 col col-12">
                            <label for="id_prenom" class="input-group-text fv-sm-w-100">Prénom</label>
                            <input name='surname' type="text" id="id_prenom" class="form-control" placeholder="Entrer le prénom">
                        </div>
                    </div>
                    <div class="row my-3 row-cols-2 fv-sm-fcol">
                        <div class="input-group input-group-lg w-50 col">
                            <label for="id_email" class="input-group-text fv-sm-w-100">Contact</label>
                            <input name='contact' type="number" id="id_email" class="form-control" placeholder="Entrer le contact">
                        </div>

                        <div class="input-group input-group-lg w-50 col">
                            <label for="id_role" class="input-group-text fv-sm-w-100">Role</label>
                            <select name='role' class="form-select" id="id_role">
                                <option value="administrateur">Administrateur</option>
                                <option value="standard">Standard</option>
                            </select>
                        </div>
                    </div>
                    <div class="row my-3 row-cols-2 fv-sm-fcol">
                        <div class="input-group input-group-lg w-50 col showPass">
                            <label for="id_mdp" class="input-group-text fv-sm-w-100">Mot de Passe</label>
                            <input name='password' type="password" id="id_mdp" class="form-control smwp" placeholder="Entrer le mot de passe">
                            <button class="btn btn-secondary" type="button"><i class="fa fa-eye"></i> </button>
                        </div>
                        <div class="input-group input-group-lg w-50 col showPass">
                            <label for="id_mdp_" class="input-group-text fv-sm-w-100">Confirmer Mot de Passe</label>
                            <input name='password_c' type="password" id="id_mdp_" class="form-control smwp" placeholder="Confirmer le mot de passe">
                            <button class="btn btn-secondary" type="button"><i class="fa fa-eye"></i> </button>
                        </div>
                    </div>
                    <div class="text-center my-3">
                        <button class="btn btn-success fw-bold w-50 submit" type="submit">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="/static/js/page.init.js"></script>
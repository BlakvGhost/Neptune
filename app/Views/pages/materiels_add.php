<div class="bht-main-header">
    <h2 class="">Biens Materiels</h2>
</div>
<div class="bht-main-subheader">
    <div class="row justify-content-between fv-sm-fcol fv-sm-freverse">
        <nav class="col col-auto fv-sm-col-12">
            <h5 class="text-dark border-bottom py-2 fw-bold">Ajouter un Biens Materiels</h5>
        </nav>
        <nav aria-label="breadcrumb" class="col fv-sm-col-12">
            <ol class="breadcrumb fv-justify-content-end-xl">
                <li class="breadcrumb-item"><a href="javascript:void(0)" class="btn-load" data-link="home">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)" class="btn-load" data-link="materiels">Biens Materiels</a></li>
                <li class="breadcrumb-item active" aria-current="page">Ajouter</li>
            </ol>
        </nav>
    </div>
</div>
<div class="p-2">
    <div class="row">
        <div class="col-12 fv-sm-p-0">
            <div class="card cardDarked">
                <div class="card-body">
                    <div class="alert alert-dismissible d-none" role="alert" id="formSuccess">
                        <h6><strong></strong><span class="fw-bold category_name"></span></h6>
                        <div class="msg"></div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <form action="/opinion_add" method="post" class="container-fluid fv-sm-form dataForm">
                        <div class="row row-cols-2 fv-sm-fcol my-3">
                            <div class="input-group input-group-lg col fw-xl-w-50">
                                <label for="nomDuClient" class="input-group-text">Object</label>
                                <input name='name' type="text" id="nomDuClient" class="form-control" placeholder="Entrer le nom du bien">
                            </div>
                            <div class="input-group input-group-lg col fw-xl-w-50">
                                <label for="prenomDuClient" class="input-group-text">Quantité</label>
                                <input name='surname' type="number" id="prenomDuClient" class="form-control" placeholder="Entrer le prenom">
                            </div>
                        </div>
                        <div class="row row-cols-2 fv-sm-fcol my-3">
                            <div class="input-group input-group-lg col fw-xl-w-50">
                                <label for="nomDuClient" class="input-group-text">Categorie</label>
                                <select name='category_id' class="form-select" id="id_cat" aria-required="true">
                                    <option value="0" disabled>-----Select One-----</option>
                                    <option>Immobiliere</option>
                                </select>   
                            </div>
                            <div class="input-group input-group-lg col fw-xl-w-50">
                                <label for="prenomDuClient" class="input-group-text">Date d'ajout</label>
                                <input name='surname' type="date" id="prenomDuClient" class="form-control" placeholder="Entrer le prenom">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="desc" class="form-group-text">Utilisation</label>
                            <textarea name="opinion" id="desc" cols="30" rows="6" class="form-control" placeholder="Une description facultative de l'utilisation de l'object"></textarea>
                        </div>
                        <div class="text-center mt-4">
                            <button class="btn btn-success w-25 submit" type="submit">Ajouter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="/static/js/page.init.js"></script>
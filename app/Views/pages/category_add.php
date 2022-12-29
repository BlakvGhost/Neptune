<div class="bht-main-header">
    <h2>Les catégories disponibles</h2>
</div>
<div class="bht-main-subheader">
    <div class="row justify-content-between fv-sm-fcol">
        <nav class="col col-auto fv-sm-col-12">
            <h5 class="text-dark border-bottom py-2 fw-bold">Enregistrer une catégorie &nbsp;&nbsp; <i class="fa fa-plus"></i></h5>
        </nav>
        <nav aria-label="breadcrumb" class="col fv-sm-col-12">
            <ol class="breadcrumb fv-justify-content-end-xl">
                <li class="breadcrumb-item"><a href="javascript:void(0)" class="btn-load" data-link="home">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)" class="btn-load" data-link="category">Categories</a></li>
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
                    <form action="/category_add" method="post" class="container-fluid dataForm fv-sm-form">
                        <div class="">
                            <input type="hidden" name='action' value='addCategory'>
                            <div class="input-group input-group-lg my-3">
                                <label for="nomDuCategory" class="input-group-text fv-sm-w-100">Nom du catégorie</label>
                                <input name='category' type="text" id="nomDuCategory" class="form-control" placeholder="Entrer le nom de la catégorie">
                            </div>
                            <div class="form-group my-3">
                                <label for="descCategory" class="form-text">Description du catégorie</label>
                                <textarea name="comments" id="descCategory" class='form-control' cols="30" rows="10"></textarea>
                            </div>
                            <div class='my-3 text-center'><button class='btn btn-success w-25 submit' type='submit'>Créer</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="/static/js/page.init.js"></script>
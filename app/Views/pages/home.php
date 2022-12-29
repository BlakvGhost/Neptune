<div>
    <div class="bht-main-header">
        <h3>ONLINE STORE MANAGEMENT SYSTEM</h3>
    </div>
    <div class="bht-main-subheader">
        <div class="d-flex justify-content-between">
            <nav>
                <h5 class="text-dark border-bottom py-2">Bienvenu !</h5>
            </nav>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)" class="btn-load" data-link="home">FuturaVision</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Home</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="p-2">
    <section>
        <div class="row">
            <div class="col-xl-3 col-sm-6 my-3 fv-sm-p-0">
                <div class="card bg-info p-0 border-0 shadow overflow-hidden">
                    <div class="card-body widget-style-2 position-relative p-0">
                        <div class="text-white media p-3" data-counterup="<?= $data['weekProducts'] + 1 ?>">
                            <div class="media-body align-self-center">
                                <h2 class="my-0 text-white"><span class="counterup fw-bold"></span></h2>
                                <p class="mb-0">Produits ajoutés cette semaine</p>
                            </div>
                        </div>
                        <div class="position-absolute top-0 end-0">
                                <button class="btn btn-light rounded-0 text-success"><i class="fas fa-layer-group"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 my-3 fv-sm-p-0">
                <div class="card bg-primary p-0 border-0 shadow overflow-hidden">
                    <div class="card-body widget-style-2 position-relative p-0">
                        <div class="text-white media p-3" data-counterup="<?= $data['todayProducts'] + 1 ?>">
                            <div class="media-body align-self-center">
                                <h2 class="my-0 text-white"><span class="counterup fw-bold"></span></h2>
                                <p class="mb-0">Produits ajoutés aujourd'hui</p>
                            </div>
                        </div>
                        <div class="position-absolute top-0 end-0">
                                <button class="btn btn-light rounded-0 text-success"><i class="fas fa-cart-plus"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 my-3 fv-sm-p-0">
                <div class="card bg-success p-0 border-0 shadow overflow-hidden">
                    <div class="card-body widget-style-2 position-relative p-0">
                        <div class="text-white media p-3" data-counterup="<?= $data['todayShopping'] + 1 ?>">
                            <div class="media-body align-self-center">
                                <h2 class="my-0 text-white"><span class="counterup fw-bold"></span></h2>
                                <p class="mb-0">Vendu aujourd'hui</p>
                            </div>
                        </div>
                        <div class="position-absolute top-0 end-0">
                                <button class="btn btn-light rounded-0 text-success"><i class="far fa-money-bill-alt"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 my-3 fv-sm-p-0">
                <div class="card bg-secondary p-0 border-0 shadow overflow-hidden">
                    <div class="card-body widget-style-2 position-relative p-0">
                        <div class="text-white media p-3" data-counterup="<?= $data['monthShopping'] + 1 ?>">
                            <div class="media-body align-self-center">
                                <h2 class="my-0 text-white"><span class="counterup fw-bold"></span></h2>
                                <p class="mb-0">Vendu ce mois </p>
                            </div>
                        </div>
                        <div class="position-absolute top-0 end-0">
                                <button class="btn btn-light rounded-0 text-success"><i class="fas fa-handshake"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-4">
                            <div class="col-xl-8 fv-sm-p-0">
                                <div class="card cardDarked">
                                    <div class="card-header py-3 bg-transparent row row-cols-2">
                                        <h5 class="header-title mb-0">Vente du mois</h5>
                                        <div class="card-widgets text-end">
                                            <a href="javascript:void(0)" data-bs-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                            <a data-bs-toggle="collapse" href="javascript:void(0)" data-bs-target="#cardCollpase1" role="button" aria-expanded="false" aria-controls="cardCollpase1"><i class="mdi mdi-minus"></i></a>
                                        </div>                                        
                                    </div>
                                    <div id="cardCollpase1" class="collapse show">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div id="morris-bar-example" class="morris-charts" dir="ltr" style="height: 320px;"></div>
                                                    <div class="row text-center mt-4 mb-4">
                                                        <div class="col-sm-3 col-6">
                                                            <h5>$ 126</h5>
                                                            <small class="text-muted">Vendu Aujourd'hui</small>
                                                        </div>
                                                        <div class="col-sm-3 col-6">
                                                            <h5>$ 967</h5>
                                                            <small class="text-muted">Vendu cette Semaine</small>
                                                        </div>
                                                        <div class="col-sm-3 col-6">
                                                            <h5>$ 4500</h5>
                                                            <small class="text-muted">Vendu ce Mois</small>
                                                        </div>
                                                        <div class="col-sm-3 col-6">
                                                            <h5>$ 87,000</h5>
                                                            <small class="text-muted">Vendu cette Annee</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- end card-->

                            </div>
                            <!-- end col -->

                            <div class="col-xl-4 fv-sm-p-0">
                                <div class="card cardDarked">
                                    <div class="card-header py-3 bg-transparent row justify-content-between">  
                                        <h5 class="header-title mb-0 col col-8">Nouveaux produit</h5>
                                        <div class="card-widgets text-end col col-auto">
                                            <a href="javascript:void(0)" data-bs-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                            <a data-bs-toggle="collapse" href="javascript:void(0)" data-bs-target="#cardCollpase2" role="button" aria-expanded="false" aria-controls="cardCollpase2"><i class="mdi mdi-minus"></i></a>
                                        </div>
                                    </div>
                                    <div id="cardCollpase2" class="collapse show">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div id="morris-line-example" class="morris-charts" dir="ltr" style="height: 200px;"></div>
                                                    <div class="row text-center mt-4">
                                                        <div class="col-sm-4">
                                                            <h5>$ 86,956</h5>
                                                            <small class="text-muted"> Nouveaux produit aujourd'hui</small>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <h5>$ 86,69</h5>
                                                            <small class="text-muted">Nouveaux produit cette semaine</small>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <h5>$ 948,16</h5>
                                                            <small class="text-muted">Nouveaux produit cette annee</small>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- end card-->

                                <div class="card cardDarked">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="status">
                                                    <h3 class="mt-2">61.5%</h3>
                                                    <p class="mb-1">Meilleurs Vente</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 mt-3">
                                                <span class="sparkpie-big"><canvas width="98" height="50" style="display: inline-block; width: 98px; height: 50px; vertical-align: top;"></canvas></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
    </section>
</div>
<script type="text/javascript">
    jQuery('.media').each(function(e,x){
        let i = 0;
        setInterval(function(){
        if (i < jQuery(x).data('counterup')){
            jQuery(x).find('.counterup').text(i);
                i++;
            }
        },50)
    });
</script>
<script src="/static/vendors/graphs/morris.min.js" charset="utf-8"></script>
<script src="/static/vendors/graphs/raphael.min.js" charset="utf-8"></script>
<script src="/static/vendors/graphs/jquery.sparkline.min.js" charset="utf-8"></script>
<script src="/static/js/graph.init.js" charset="utf-8"></script>

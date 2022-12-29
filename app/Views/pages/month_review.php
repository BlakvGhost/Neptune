<div id="contain" class="d-none" aria-description="Rapport Global du mois de Novembre"></div>
<div class="bht-main-header">
    <h2>Rapport des Ventes</h2>
</div>
<div class="bht-main-subheader">
    <div class="row justify-content-between fv-sm-fcol">
        <nav class="col col-auto fv-sm-col-12">
            <h5 class="text-dark border-bottom py-2 fw-bold">Rapport Generale du mois de Novembre</h5>
        </nav>
        <nav aria-label="breadcrumb" class="col fv-sm-col-12">
            <ol class="breadcrumb fv-justify-content-end-xl">
                <li class="breadcrumb-item"><a href="javascript:void(0)" class="btn-load" data-link="home">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)" class="btn-load" data-link="produit">Rapport</a></li>
                <li class="breadcrumb-item active" aria-current="page">Genarale</li>
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
                            <button class="btn btn-secondary btn-print" ><span>Imprimer</span></button>
                            <button class="btn btn-secondary btn-excel"><span>Excel</span></button>
                            <button class="btn btn-secondary btn-pdf"><span>PDF</span></button>
                        </div>
                        <div class="col col-6 fw-sm-w-100 fv-my-3">
                            <form action="" class="row form row-cols-2">
                                <div class="col">
                                    <select name="year" id="id_year" class="form-select">
                                        <option value="default">Selectionner une annee </option>
                                        <?php for ($i=1;$i<=5;$i++): ?>
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
                    <div class="table-responsive" id="printableTable">
                        <table class="table table-light text-secondary rounded table-borderless table-striped table-hover ">
                            <tbody>
                               <tr>
                                    <th>Nombre Total de Produit Approvisionné</th>
                                    <td>63</td>
                                </tr>
                                <tr>
                                    <th>Prix Total Des Produits Approvisionnés</th>
                                    <td>476 984 FCFA</td>
                                </tr>
                                <tr>
                                    <th>Nombre Total de Produit Vendu</th>
                                    <td>763</td>
                                </tr>
                                <tr>
                                    <th>Prix Total Des Produits Vendu</th>
                                    <td>3 476 984 FCFA</td>
                                </tr>
                                <tr>
                                    <th>Total Produit en Depense</th>
                                    <td>7</td>
                                </tr>
                                <tr>
                                    <th>Prix Total des Depenses en Produit</th>
                                    <td>56 900 FCFA</td>
                                </tr>
                                <tr>
                                    <th>Autres Depenses</th>
                                    <td>8</td>
                                </tr>
                                <tr>
                                    <th>Prix Total Autres Depenses</th>
                                    <td>780 000 FCFA</td>
                                </tr>
                                <tr class="border">
                                    <th>Depenses Total</th>
                                    <td>880 000 FCFA</td>
                                </tr>
                                <tr></tr>
                                <tr class="border">
                                    <th>Benefice du Mois</th>
                                    <td>2 000 000 FCFA</td>
                                </tr>
                                <tr></tr>
                                <tr class="border">
                                    <th>Appreciation du Mois</th>
                                    <td>Trop de Depenses</td>
                                </tr>
                           </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/static/js/print.js" charset="utf-8"></script>
<script type="text/javascript" src="/static/js/page.init.js"></script>
<script type="text/javascript">
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "700",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };
    toastr['warning']("Assurez-vous d'avoir bien renseigné les dépenses","Rappel");
</script>

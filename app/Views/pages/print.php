
<div id="tablePrint">
                    <div class="my-2">
                        <div class="container-fluid">
                        <div class="row row-cols-2">
                            <div class="col col-6 align-self-center">
                                <img src="/static/img/logo-final.png" class="m-auto" style="height: 90px;width: 80%;" id="logPrint">
                            </div>
                            <div class="col col-6 text-center">
                                <h5>ELECTRICITE</h5>
                                <h5>ENERGIE SOLAIRE</h5>
                                <h5>EFFICACITE ENERGETIQUE</h5>
                                <h5>BP: 149 Natitingou - BENIN</h5>
                                <h5>TEL: +229 60 96 88 88/69 15 88 88</h5>
                                <h5>Email: powerdany2012@gmail.com</h5>
                            </div>
                        </div>
                        </div>
                        <div class="my-4">
                            <div class="row my-3">
                                <div class="col col-6 mx-3 text-center bg-secondary text-white fv-border-lg opacity-50 rounded">
                                    <div class="fw-bold border-bottom">
                                        <h5 class="fw-bold m-0 py-2">PROFORMA</h4>
                                    </div>
                                    <div class="border-top fw-bold">
                                        <h5 class="fw-bold m-0 py-2">N*002_27/06/22_AY/EL</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid my-3">
                                <div class="row row-cols-2">
                                    <div class="text-center col col-6">
                                        <h5>Jeudi 09 Novembre 2022</h5>
                                    </div>
                                    <div class="col col-6">
                                        <h4 class="text-decoration-underline fw-bold">DESTINATAIRE</h4>
                                        <p><span class="fw-bold text-decoration-underline fst-italic">Nom : </span>&nbsp;&nbsp; Alain Orounla</p>
                                        <p><span class="fw-bold text-decoration-underline fst-italic">Adresse : </span>&nbsp;&nbsp; Ourbouga - Natitingou</p>
                                        <p><span class="fw-bold text-decoration-underline fst-italic">Tel : </span>&nbsp;&nbsp; 98376462</p>
                                    </div>
                                </div>
                            </div>
                            <div class="my-2">
                                <h6><span class="fw-bold text-decoration-underline">Concerne :</span> Fourniture de materiels electronique</h6>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-center table-light text-secondary rounded table-bordered table-hover table-striped" data-table-sort="10" >
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom du Produit</th>
                                <th>Prix</th>
                                <th>Total Stock</th>
                                <th>Reste Stock</th>
                                <th>Total Vendu(J)</th>
                                <th>Total Vendu(T)</th>
                            </tr>
                        </thead>
                            <tbody>
                            <?php $i = 1?>
                            <?php foreach($data as $key => $value): ?>
                                <tr>
                                    <td><?=$i?></td>
                                    <td class="sortCol"><?= $value ['name'] ?></td>
                                    <td aria-filter data-val="<?= $value ['price'] ?>"></td>
                                    <td><?= $value ['totalStock'] ? $value ['totalStock'] : 0 ?></td>
                                    <td><?= $value ['reste'] ? $value ['reste'] : 0 ?></td>
                                    <td><?= $value ['today'] ? $value ['today'] : 0 ?></td>
                                    <td><?= $value ['vendus'] ? $value ['vendus'] : 0 ?></td>
                                </tr>
                                <?php $i ++ ?>
                            <?php endforeach; ?>
                            </tbody>
                    </table>
                    </div>
                    <div class="container-fluid my-5">
                      <div class="row row-cols-2 rounded bg-secondary text-white p-2">
                        <div class="col col-4 text-center mx-auto">
                          <h5>RCCM RB/NAT/2020-B-627</h5>
                          <h5>IFU N* 3202112775973</h5>
                          <h5>ECOBANK: N* 111116137001</h5>
                        </div>
                        <div class="border-start col col-4 text-center mx-auto">
                          <h5>BP: 149 Natitingou - BENIN</h5>
                          <h5>TEL: +229 60 96 88 88/69 15 88 88</h5>
                          <h5>WHATSAPP : +229 97 37 60 87</h5>
                        </div>
                      </div>
                    </div>
               </div>

<script src="/static/js/table.js" charset="utf-8" ></script>
<script type="text/javascript" src="/static/js/page.init.js"></script>

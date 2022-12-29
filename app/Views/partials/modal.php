<div class="container-fluid bg-light" id="WindowPreloader" style="height:100vh">
    <div class="row justify-content-center h-100 w-100">
          <div class="col-6 m-auto">
            <div class="w-100"><div class="text-center" id="logoLoad"></div></div>
              <div class="text-center">
                <div class="spinner-grow m-1 text-info" role="status">
                  <span class="sr-only">Loading...</span>
                </div>
                <div class="spinner-grow m-1 text-warning" role="status">
                  <span class="sr-only">Loading...</span>
                </div>
                <div class="spinner-grow m-1 text-danger" role="status">
                  <span class="sr-only">Loading...</span>
                </div>
              </div>
          </div>
      </div>
  </div>
<section>
  <section id="customModal">
  <div class="customerInfo">
      <div class="modal fade" id="customerInfo" tabindex="-1" aria-labelledby="customerInfoLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="customerInfoLabel">Informations sur le client</h5>
            <button type="button" class="btn-close" data-bs-dsmiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body text-center">
            <div>
              <table class="table table-bordered table-light text-center rounded">
                <tbody>
                  <tr>
                    <th>Nom et Prenom</th>
                    <td id="userModalNames"></td>
                  </tr>
                  <tr>
                    <th>Contact</th>
                    <td id="userModalContact"></td>
                  </tr>
                  <tr>
                    <th>Date d'achat</th>
                    <td id="userModalShoppDate"></td>
                  </tr>
                  <tr>
                    <th>Heure d'achat</th>
                    <td id="userModalShoppTime"></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="my-3">
              <button type="button" class="btn btn-primary cancelDelete" data-bs-dismiss="modal" >Fermer</button>
            </div>
          </div>
        </div>
    </div>
  </div>
    <div class="backup-confirmation">
      <div class="modal fade" id="backupConfirmation" tabindex="-1" aria-labelledby="backupConfirmationLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="backupConfirmationLabel">Sauvegarder les donnees de l'application</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
              <h4>Vous avez: </h4>
              <div>
              <table class="table table-bordered table-light text-center rounded table-striped table-hover">
                <tbody>
                  <tr>
                    <th class="text-start">Nombre de produit Produit</th>
                    <td>565</td>
                  </tr>
                  <tr>
                    <th class="text-start">Nombre de Vente</th>
                    <td>65</td>
                  </tr>
                  <tr>
                    <th class="text-start">Nombre de prospere</th>
                    <td>97</td>
                  </tr>
                  <tr>
                    <th class="text-start">Nombre d'utilisateur</th>
                    <td>27</td>
                  </tr>
                </tbody>
              </table>
            </div>
              <div class="my-3">
                <button type="button" class="btn btn-danger trueDelete" id="backup-success" data-bs-dismiss="modal">Sauvegarder</button>
                <button type="button" class="btn btn-primary cancelDelete" data-bs-dismiss="modal" >Annuler</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="restore-confirmation">
      <div class="modal fade" id="restoreConfirmation" tabindex="-1" aria-labelledby="restoreConfirmationLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="restoreConfirmationLabel">Restaurer les donnees de l'application</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
              <h4>Selectionner une sauvegarde pour appliquer</h4>
              <div>
                <ul class="list-group">
                  <div>
                    <li class="list-group-item list-group-item-control list-group-bg-light" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#restoreLoading">Sauvegarde du 27 Mai 2020 | 26 Ko</li>
                  </div>
                  <div>
                    <li class="list-group-item list-group-item-control list-group-variant-bg-light" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#restoreLoading">Sauvegarde du 27 Mai 2020 | 29 Ko</li>
                  </div>
                </ul>
              </div>
              <div class="my-3">
                <button type="button" class="btn btn-primary cancelDelete" data-bs-dismiss="modal" >Annuler</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="restore-loading">
      <div class="modal fade" id="restoreLoading" tabindex="-1" aria-labelledby="restoreLoadingLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="restoreLoadingLabel">Restaurer les donnees de l'application</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
              <h4>Restauration en cours,patientez....</h4>
              <div>
                <div class="loader-article">
                  <div class="preloader-wrapper">
                    <div class="loader-spinner">
                    </div>
                  </div>
                  <span class="h3 fw-bold">36 %</span>
                </div>
              </div>
              <div class="my-3">
                <button type="button" class="btn btn-primary cancelDelete" data-bs-dismiss="modal" >Annuler</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
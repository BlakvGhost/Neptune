<?= view('partials/meta') ?>
<div class="restoreMdp">
  <div class="modal fade" id="restoreMdp" tabindex="-1" aria-labelledby="restoreMdpLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="restoreMdpLabel"><span class="fw-bold">Demande de reinitialisation de mot de passe</span> </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <form class="form" action="" method="post">
          <div class="input-group input-group-lg my-3">
            <label for="contact_restore" class="input-group-text">Contact</label>
            <input type="text" name="contact_restore" id="contact_restore" class="form-control" placeholder="Entrer votre contact" aria-required>
          </div>
          <div class="form-group my-2">
            <label for="id_remarque" class="form-group-text">Remarque</label>
            <textarea name="message" rows="8" cols="80" id="id_remarque" class="w-100" placeholder="Entrer une raison de votre demande de reinitialisation"></textarea>
            <small class="form-text w-100 mt-2 fst-italic" id="RemarqueHelp"><i class="fa fa-info-circle"></i>&nbsp; Facultative</small>
          </div>
          <div class="my-3">
            <small class="form-text w-100 mt-2" id="RemarqueHelp"><i class="fa fa-info-circle"></i>&nbsp; Cette demande peut prendre une journée ou plus,cela dependra de la disponilité de l'Admin,Le nouveau mot de passe vous sera envoyé une fois reinitialisé par votre adresse email</small>
          </div>
          <div class="text-center my-3">
            <button type="submit" name="button" class="btn btn-success fw-bold py-2">Envoyer la Demande</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
<div class="container-fluid bg-custom fv-sm-p-0" style="height:100vh">
		<div class="row justify-content-center h-100 w-100 fv-sm-p-0 fv-m-0">
	        <div class="col-6 m-auto fv-sm-w-100 fv-sm-col-12 fv-sm-p-0 fv-sm-w-100">
	            <div class="card bg-secondary shadow fv-rounded-sm-0">
	            	<div class="card-header">
	            		<div class="p-2 w-50 mx-auto">
				            <div class="fw-bold m-0 border-0 text-center">
                      <a href="javascript:void(0)" class="btn-load text-decoration-none text-white col-8 col" id="lg-bht" data-link="home" href="javascript:void(0"><img src="/favicon.png" style="height:30px;width:30px"></a>
                    </div>
				        </div>
	            	</div>
	                <div class="card-body ft-regular">
	                	<h5 class="text-center card-title text-white opacity-50">Connexion au System de Management de FuturaVision SARL</h5>
                        <div class="alert alert-dismissible d-none" role="alert" id="formSuccess">
                            <h6><strong></strong><span class="fw-bold category_name"></span></h6>
                            <div class="msg"></div>
                            <div><a href="javascript:void(0)" class="text-info" data-bs-toggle="modal" data-bs-target="#restoreMdp">Mot de Passe oublié ?</a></div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
	                     <div>
						 <form action="/user_connect" method="POST" class="fv-sm-form dataForm contenair-fluid">
	                     		<div class="input-group input-group-lg my-3">
	                                <label for="id_contact" class="input-group-text fv-sm-light">Contact</label>
	                                <input name='contact' aria-required type="text" id="id_contact" class="form-control" placeholder="Entrer votre contact">
                                </div>
                            	<div class="input-group input-group-lg my-4 showPass">
	                                <label for="id_password" class="input-group-text fv-sm-w-100 fv-sm-light">Mot de Passe</label>
	                                <input name='password' aria-required type="password" id="id_password" class="form-control smwp" placeholder="Entrer votre Mot de Passe">
                                  <button class="btn btn-dark input-group-btn " type="button"><i class="fa fa-eye"></i></button>
                                </div>
                            	<div class="form-check form-switch flex-nowrap">
	                                <input type="checkbox" name="persistance" id="id_persistance" class="form-check-input">
	                                <label for="id_persistance" class="form-text text-white fv-sm-light">Se souvenir de moi</label>
                                </div>
                            	<div class="my-3 text-center">
                            		<button type="submit" class="btn btn-dark fw-bold w-50 submit">Se Connecter</button>
                            	</div>
                                <input type="hidden" name="last_login" value="<?= date('Y-m-d h:m:s')?>">
	                     	</form>
	                     </div>
	                </div>
	                <div class="card-footer">
	                	<div class="">
                           <a href="javascript:void(0)" class="text-info" data-bs-toggle="modal" data-bs-target="#restoreMdp">Mot de Passe oublié ?</a>
                           <a href="javascript:void(0)" class="text-info float-end">Contact</a>
                        </div>
	                </div>
	            </div>
	        </div>
    	</div>
	</div>
<footer></footer>
<script src="/static/js/async.js" charset="utf-8" ></script>
<script src="/static/js/script.js" charset="utf-8" ></script>
</body>
</html>

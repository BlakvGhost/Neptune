<aside class="col col-2 p-0" style="height: 100vh;" tabindex="-1" id="sidebar">
    <div class="list-group overflow-hidden mb-3" style="height:80%">
        <div class="p-2 sideLogo text-center">
            <div class="fw-bold m-0 list-group-item border-0 d-flex justify-content-between align-items-center">
                <a href="javascript:void(0)" class="btn-load text-decoration-none text-white text-center col-8 col" id="lg-bht" data-link="home" href="javascript:void(0"><img src="/favicon.png" style="height:40px;widt:50px"></a>
                <a href="javascript:void(0)" class="btn-close text-reset text-white col col-auto" id="closeOffcanvas" data-bs-dismiss="offcanvas" aria-label="Close"></a>
            </div>
        </div>
        <div class="sideDesc">
            <p class="list-group-item diseabled text-white m-0 text-muted text-center fst-italic">Système de Gestion de Boutique en Ligne</p>
        </div>
        <div class="overflow-auto" id="listMainSide" style="height: 80%;">
            <div>
                <a href="javascript:void(0)" class="list-group-item list-group-item-action load m-0" data-link="home"><i class="fas fa-home" aria-desc="Page d'acceuil"></i>&nbsp;&nbsp;<span class="text-group">Home</span></a>
            </div>            
            <div class="SideLink-group">
                <a href="javascript:void(0)" class="list-group-item list-group-item-action" data-bs-toggle="collapse" data-bs-target="#id_produit" data-eg-link="produit"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;<span class="text-group">Produits</span><i class="fas fa-plus-circle fa-pull-right"></i></a>
                <div class="list-group px-2 under_collapse collapse" id="id_produit">
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action btn-load" data-link="produit_add" role="button" aria-desc="Ajouter un produit au magasin" data-fv-label="Ajouter un produit au magasin"><span>Ajouter</span></a>
                    <a href="javascript:void(0)" aria-desc="Approvisionnement de produit" data-fv-label="approvisionnement de produit" class="list-group-item list-group-item-action btn-load" data-link="approvisionnement" role="button"><span>Approvisionnement</span></a>
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action btn-load" data-link="produit" role="button" aria-desc="Voir les produits au magasin" data-fv-label="Voir les produits au magasin"><span>Voir</span></a>
                </div>
            </div>
            <div class="SideLink-group">
                <a href="javascript:void(0)" class="list-group-item list-group-item-action" data-bs-toggle="collapse" data-bs-target="#id_produit_ventes" data-eg-link="ventes_total"><i class="far fa-money-bill-alt"></i>&nbsp;&nbsp;<span class="text-group">Ventes</span><i class="fas fa-plus-circle fa-pull-right"></i></a>
                <div class="list-group collapse px-2 under_collapse" id="id_produit_ventes">
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action btn-load" data-link="achat" role="button" aria-desc="Effectuer une vente"><span>Effectuer une Vente</span></a>
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action btn-load" data-link="ventes" role="button" aria-desc="Les ventes de ce jour"><span>Vente Journaliere</span></a>
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action btn-load" data-link="ventes_total" role="button" aria-desc="Detail des Ventes en General"><span>Vente General</span></a>
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action btn-load" data-link="facture_proformat" role="button" aria-desc="Effectuer une facture proformat"><span>Effectuer une facture proformat</span></a>
                </div>
            </div>
            <div class="SideLink-group">
                <a href="javascript:void(0)" class="list-group-item list-group-item-action" data-bs-toggle="collapse" data-bs-target="#id_produit_pros" data-eg-link="materiels"><i class="fas fa-walking"></i>&nbsp;&nbsp;<span class="text-group">Biens materiels</span><i class="fas fa-plus-circle fa-pull-right"></i></a>
                <div class="list-group collapse px-2 under_collapse" id="id_produit_pros">
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action btn-load" data-link="materiels_add" role="button" aria-desc="Enregistrer un bien materiel de l'entreprise"><span>Ajouter</span></a>
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action btn-load" data-link="materiels_perte" role="button" aria-desc="Signaler une perte de bien materiel de l'entreprise"><span>Signaler une perte</span></a>
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action btn-load" data-link="materiels" role="button" aria-desc="Voir les Biens Materiels de l'entreprise"><span>Voir</span></a>
                </div>
            </div>
            <div class="SideLink-group">
                <a href="javascript:void(0)" class="list-group-item list-group-item-action" data-bs-toggle="collapse" data-bs-target="#id_produit_category" data-eg-link="category"><i class="fas fa-book"></i>&nbsp;&nbsp;<span class="text-group">Catégories</span><i class="fas fa-plus-circle fa-pull-right"></i></a>
                <div class="list-group collapse px-2 under_collapse" id="id_produit_category">
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action btn-load" data-link="category_add" role="button" aria-desc="Ajouter une nouvelle Catégorie"><span>Ajouter</span></a>
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action btn-load" data-link="category" role="button" aria-desc="Voir les Catégorie"><span>Voir</span>  </a>
                </div>
            </div>
            <div class="SideLink-group">
                <a href="javascript:void(0)" class="list-group-item list-group-item-action" data-bs-toggle="collapse" data-bs-target="#id_rapport" data-eg-link="inventaire"><i class="fas fa-file-alt"></i>&nbsp;&nbsp;<span class="text-group">Rapport du Mois</span><i class="fas fa-plus-circle fa-pull-right"></i></a>
                <div class="list-group collapse px-2 under_collapse" id="id_rapport">
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action btn-load" data-link="inventaire" role="button" aria-desc="Inventaire du mois"><span>Inventaire</span></a>
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action btn-load" data-link="send_depenses" role="button" aria-desc="Soumettre les depenses du mois"><span>Soumettre les Dépenses</span></a>
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action btn-load" data-link="depenses" role="button" aria-desc="Rapport General des depenses"><span>Rapport General des Dépenses</span></a>
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action btn-load" data-link="month_review" role="button" aria-desc="Rapport General des activitees du mois"><span>Rapport General</span></a>
                </div>
            </div>
            <div class="SideLink-group">
                <a href="javascript:void(0)" class="list-group-item list-group-item-action load" data-link="customers" aria-desc="Voir le detail des clients enregistres"><i class="fas fa-users"></i>&nbsp;&nbsp;<span class="text-group">Clients</span></a>
            </div>
            <div class="SideLink-group">
                <a href="javascript:void(0)" class="list-group-item list-group-item-action" data-bs-toggle="collapse" data-bs-target="#id_produit_user" data-eg-link="users"><i class="fas fa-user-cog"></i>&nbsp;&nbsp;<span class="text-group">Utilisateurs</span><i class="fas fa-plus-circle fa-pull-right"></i></a>
                <div class="list-group collapse px-2 under_collapse" id="id_produit_user">
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action btn-load" data-link="user_add" role="button" aria-desc="Ajouter un utilisateur"><span>Ajouter</span></a>
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action btn-load" data-link="users" role="button" aria-desc="Voir les Utilisateurs enregistres"><span>Voir</span>  </a>
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action btn-load" data-link="demande_mdp" role="button" aria-desc="Voir les demandes de reinitialisation de mot de passe"><span>Les demandes de reinitialisation de mot de passe</span></a>
                </div>
            </div>
            <div class="SideLink-group">
                <a href="javascript:void(0)" class="list-group-item list-group-item-action" data-bs-toggle="collapse" data-bs-target="#id_produit_save" data-eg-link="backup"><i class="fas fa-cloud-upload-alt"></i>&nbsp;&nbsp;<span class="text-group">Sauvegarde</span> <i class="fas fa-plus-circle fa-pull-right"></i></a>
                <div class="list-group collapse px-2 under_collapse" id="id_produit_save">
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action btn-load" role="button" data-bs-toggle="modal" data-bs-target="#backupConfirmation" aria-desc="Sauvegarder les donnees de l'appli"><span>Sauver</span></a>
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action btn-load" role="button" data-bs-toggle="modal" data-bs-target="#restoreConfirmation" aria-desc="Restaurer les donnees de l'appli"><span>Restaurer</span></a>
                </div>
            </div>

        </div>
    </div>
    <div class="sidebarFooter">
        <div class="copyright w-100" style="font-family:'Montserrat regular'">
            <div class="text-center">
                <div class="m-0 mx-2"> &copy; 2021 - <?= date('Y') ?> FuturaVision SARL</div>
                <div class="m-0">Conçu et dévéloppé par </div>
                <a href="javascript:void(0)" href="javascript:void(0">
                    <img src="/static/img/FuturaVisionProjectLow.png" class="w-50" style="height:15px;">
                </a>
            </div>
        </div>
    </div>
    <div class="fv-resize" draggable="true"></div>
</aside>

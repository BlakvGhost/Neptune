<header class="shadowCustom text-dark">
        <nav class="nvbar navbar-expand-lg navbar-light bg-light">
          <div class="d-flex justify-content-between">
              <div class="p-2 navbar-toggler border-0 mx-4">
                <a href="javascript:void(0)" class="btn-load text-decoration-none text-white text-center" id="lg-bht" data-link="home" href="javascript:void(0"><img src="/favicon.png" style="height:25px;width:25px"></a>
              </div>
              <div class="navbar-toggler border-0">
                <button class="btn btn-light darkmode"><i class="mdi mdi-brightness-7" style="color:rgba(0,0,0,.55);font-size: medium"></i></button>
                <button class="btn btn-light" data-bs-toggle="collapse" data-bs-target="#MobileUsers_panel"><i class="fas fa-user"></i></button>
                <button class="btn btn-light" data-bs-toggle="collapse" data-bs-target="#searchBarMobile"><i class="fas fa-search"></i></button>
                <button class="btn btn-light" id="showCanvas" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="sidebarLabel">
                  <span class="navbar-toggler-icon"></span>
                </button>
              </div>
          </div>
          <div class="collapse navbar-collapse px-3" id="headerCt">
            <div class="d-inline-flex justify-content-between w-50">
              <button class="btn btn-light" type="button" id="toggleSide">
                  <span class="navbar-toggler-icon"></span>
                </button>
              <ul class="navbar-nav me-auto mt-2 mt-lg-0 align-self-center">
                <li class="nav-item active">
                  <a class="nav-link load" href="javascript:void(0)" data-link="home">Home</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link load" href="javascript:void(0)" data-link="user">Profile</a>
                </li>
              </ul>
            </div>
            <div class="w-50">
              <div class="row justify-content-between w-100">
              <form class="form col col-8 nav-link">
                  <div class="input-group ft-regular">
                      <label for="id_q" class="input-group-text"><i class="fa fa-search"></i></label>
                      <div class="col h-100 input-group h_suggests position-relative">
                        <input class="form-control" name="q" type="search" id="id_q" autocomplete="off" placeholder="Rechercher rapidement une page..." aria-label="Search...">
                        <div class="position-absolute top-100 w-100 start-0" style="z-index:5">
                            <div class="list-group h_suggestions"></div>
                        </div>
                      </div>
                  </div>
              </form>
              <div class="col position-relative">
                <div class="nav-link position-relative" data-bs-toggle="collapse" data-bs-target="#users_panel">
                  <i class="far fa-user fa-2x" style="color:rgba(0,0,0,.55)"></i>
                  <span class="position-absolute start-50 translate-middle badge rounded-pill bg-info">
                    99+
                    <span class="visually-hidden">unread messages</span>
                  </span>
                </div>
              </div>
              <div class="col align-self-center">
                <div class="nav-link p-0 darkmode" title="Mode Sombre"><i class="mdi mdi-brightness-7 fa-2x" style="color:rgba(0,0,0,.55)"></i></div>
                </div>
              </div>
              <div class="under_header_display w-100 position-relative">
                <div class="position-absolute shadow w-50 end-0 bg-light collapse text-white" id="users_panel" style="z-index: 5;">
                    <div id="under_user">
                      <ul class="list-group">
                        <li class="list-group-item list-group-item-control disable text-center fw-bold"><i class="fa fa-comments"></i>&nbsp; Notifications</li>
                          <li class="list-group-item list-group-item-control"><a href="javascript:void(0)" class="text-decoration-none"><i class="fas fa-bell text-success"></i>&nbsp; 47 Nouveaux produit ont été ajouté au magasin<small class="text-danger fst-italic d-block">[ il y'a 4 minuite ]</small> </a> </li>
                      </ul>
                      <ul class="list-group border-top">
                        <li class="list-group-item list-group-item-control disable text-center fw-bold"><i class="far fa-user"></i>&nbsp; Utilisateur</li>
                        <li class="list-group-item list-group-item-control bg-light"><span class="fw-bold">NOM : </span><span><?= session() -> get('name') . ' ' . session() -> get('surname') ?></span></li>
                        <li class="list-group-item list-group-item-control bg-light"><span class="fw-bold">ROLE : </span><span><?= ucfirst(session() -> get('role')) ?></span></li>
                        <li class="list-group-item list-group-item-control text-center bg-light"><a href="javascript:void(0)" class="btn btn-dark mx-2 load" data-link="user" role="button">Profile</a><a href="/logout" class="btn btn-dark mx-2" role="button">Log Out</a></li>
                      </ul>
                    </div>
                </div>
              <div class="position-absolute shadow w-auto end-0 bg-light collapse text-white" id="backup_panel" style="z-index: 5;">
                    <div id="under_backup">
                      <ul class="list-group border-top">
                        <li class="list-group-item list-group-item-control fw-bold" data-bs-toggle="modal" data-bs-target="#backupConfirmation"><i class="fa fa-download"></i>&nbsp;&nbsp;Sauvegarder</li>
                        <li class="list-group-item list-group-item-control fw-bold" data-bs-toggle="modal" data-bs-target="#restoreConfirmation"><i class="fa fa-upload"></i>&nbsp;&nbsp;Restaurer</li>
                      </ul>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div class="collapse position-absolute w-100 start-0 fade" style="z-index:6" id="searchBarMobile">
            <div class="p-3 bg-light">
              <div class="input-group ft-regular">
                      <label for="id_q" class="input-group-text"><i class="fa fa-search"></i></label>
                      <div class="col h-100 input-group h_suggests position-relative">
                        <input class="form-control" type="search" id="id_q" placeholder="Rechercher rapidement une page..." aria-label="Search...">
                        <div class="position-absolute top-100 w-100 start-0" style="z-index:5">
                            <div class="list-group h_suggestions"></div>
                        </div>
                      </div>
                  </div>
            </div>
          </div>
          <div class="position-absolute shadow w-75 p-3 end-0 bg-light collapse text-white" id="MobileUsers_panel" style="z-index: 5;">
            <div id="under_user">
              <ul class="list-group">
                <li class="list-group-item list-group-item-control disable text-center fw-bold bg-light"><i class="fa fa-comments"></i>&nbsp; Notifications</li>
                <li class="list-group-item list-group-item-control bg-light"><a href="javascript:void(0)" class="text-decoration-none"><i class="fas fa-bell text-success"></i>&nbsp; 47 Nouveaux produit ont été ajouté au magasin<small class="text-danger fst-italic d-block">[ il y'a 4 minuite ]</small> </a> </li>
              </ul>
              <ul class="list-group border-top">
                <li class="list-group-item list-group-item-control disable text-center fw-bold bg-light"><i class="far fa-user"></i>&nbsp; Utilisateur</li>
                <li class="list-group-item list-group-item-control bg-light"><span class="fw-bold">NOM : </span><span><?= session() -> get('name') . ' ' . session() -> get('surname') ?></span></li>
                  <li class="list-group-item list-group-item-control bg-light"><span class="fw-bold">ROLE : </span><span><?= ucfirst(session() -> get('role')) ?></span></li>
                <li class="list-group-item list-group-item-control text-center bg-light"><a href="javascript:void(0)" class="btn btn-dark mx-2 load" data-link="user" role="button">Profile</a><a href="/logout" class="btn btn-dark mx-2" role="button">Log Out</a></li>
              </ul>
            </div>
          </div>
      </nav>
    </header>

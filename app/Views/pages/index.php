<?= view('partials/meta') ?>
<?= view('partials/modal')?>
<section class="container-fluid">
  <div class="row row-cols-2 flex-nowrap">
      <?= view('partials/sidebar')?>
      <section class="col col-10 p-0 mainContainer" id="mainContainer">
          <?= view('partials/header')?>
          <main class="bg-main p-3 position-relative" style="font-family:'Montserrat regular'">
            <div class="container-fluid bg-light d-none" id="MainPreloader" style="height:100vh">
              <div class="row justify-content-center h-100 w-100">
                <div class="col-6 m-auto">
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
          <div id="main" class="container-fluid">
              <?= view('pages/home')?>
          </div>
        </main>
      </section>
  </div>
</section>
<?= view('partials/footer')?></section>
</body>
<script src="/static/js/sweetalert.init.js" charset="utf-8" ></script>
<script src="/static/js/async.js" charset="utf-8"></script>
<script src="/static/js/app.js" charset="utf-8"></script>
</html>

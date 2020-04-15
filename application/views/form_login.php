
<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-5 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Form Login</h1>
                  </div>
                  <?= $this->session->flashdata('pesan'); ?>
                  <form method="post" action="<?= base_url('auth/login'); ?>" class="user" autocomplete="off">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="username" placeholder="Masukkan username..">
                      <?= form_error('username', '<div class="text-danger small pl-3">','</div>'); ?>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" name="password" placeholder="Massukkan Password">
                      <?= form_error('password', '<div class="text-danger small pl-3">','</div>'); ?>
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary form-control">Login</button>
                  </form>
                  <div class="text-center">
                      <hr>
                    <a class="small" href="<?= base_url('registrasi'); ?>">Daftar akun</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
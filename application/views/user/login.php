<div class="container">

  <!-- Outer Row -->
  <div class="row justify-content-center">

    <div class="col-xl-10 col-lg-10 col-md-9">

      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="p-5">
          <!-- Nested Row within Card Body -->
          <!-- <div class="row"> -->
          <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
          <!-- <div class="col-lg-6"> -->
          <div class="p-5">
            <div class="text-center">
              <h1 class="h4 text-gray-900 mb-4">Login</h1>
            </div>

            <?= $this->session->flashdata('message') ?>
            <form class="user" method="post" action="">
              <div class="form-group">
                <input type="text" class="form-control mb-3 form-control-user" id="email" name="email" value="<?php echo set_value('email'); ?>" placeholder="Email">
                <?php echo form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="form-group">
                <input type="password" class="form-control mb-3 form-control-user" id="password" name="password" placeholder="Password">
                <?php echo form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <button type="submit" class=" col-xl-12 col-lg btn btn-danger btn-user btn-block">
                Login
              </button>
            </form>
            <div class="text-center">
              <!-- <a class="small" href="<?= base_url('auth/forgotPassword') ?>">Forgot Password?</a> -->
            </div>
            <div class="text-center">
              <a class="small" href="<?= base_url() ?>auth/regristation">Buat akun</a>
            </div>
            <div class="text-center">

              <a class="small" href="<?= base_url() ?>auth/forgotPassword">Lupa Password</a>
            </div>
          </div>
          <!-- </div> -->
          <!-- </div> -->
        </div>
      </div>

    </div>

  </div>

</div>
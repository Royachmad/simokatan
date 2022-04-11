  <body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="theme-loader">
        <div class="loader-p"></div>
      </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-6"><img class="bg-img-cover bg-center" src="<?php echo base_url() ?>assets/images/logo/bg.png"></div>
          <div class="col-xl-6 p-0">
            <div class="login-card">
              <form class="theme-form login-form" action="<?php echo base_url().'login/cek_login' ?>" method="post" role="form">
                <h4>Login</h4>
                <h6>Welcome back! Log in to your account.</h6>
                <div class="form-group">
                  <label>Username</label>
                  <div class="input-group"><span class="input-group-text"><i class="icon-user"></i></span>
                    <input class="form-control" type="text" name="username" required="">
                  </div>
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                    <input class="form-control" type="password" name="password" required="" placeholder="*********">
                    <div class="show-hide"><span class="show"> </span></div>
                  </div>
                </div>
                <div class="form-group">
                  <!-- <a class="btn btn-primary btn-block" href="<?php echo site_url() ?>Dashboard" >Masuk</a> -->
                  <button type="submit" class="btn btn-block text-uppercase">
                    Login
                  </button>
                </div>
                <!-- <div class="login-social-title">                
                  <h5>Sign in with</h5>
                </div>
                <p>Don't have account?<a class="ms-2" href="sign-up.html">Create Account</a></p> -->
              </form>
            </div>
          </div>
        </div>
      </div>
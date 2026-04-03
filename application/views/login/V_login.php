<div class="login-box">
   <!-- /.login-logo -->
   <div class="card card-outline card-primary">
      <div class="card-header text-center">
         <a href="<?= base_url('Home') ?>" class="h1"><b>Admin</b>Login</a>
      </div>
      <div class="card-body">
         <p class="login-box-msg">Sign in to start your session</p>

         <form method="post" action="<?= base_url('auth/login'); ?>">
            <div class="input-group mb-3">
               <input type="email" name="email" class="form-control" placeholder="Email" required>
               <div class="input-group-append">
                  <div class="input-group-text">
                     <span class="fas fa-envelope"></span>
                  </div>
               </div>
            </div>
            <div class="input-group mb-3">
               <input type="password" name="password" class="form-control" placeholder="Password" required>
               <div class="input-group-append">
                  <div class="input-group-text">
                     <span class="fas fa-lock"></span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-8">
               </div>
               <!-- /.col -->
               <div class="col-4">
                  <!-- <button type="submit" class="btn btn-primary btn-block">Sign In</button> -->
               </div>
               <!-- /.col -->
            </div>
            <div class="row">
               <div class="col-8"></div>
               <div class="col-4">
                  <button type="submit" class="btn btn-primary btn-block" onclick="">Sign In</button>
               </div>
            </div>
         </form>

         <p class="mb-1">
            <a href="forgot-password.html">I forgot my password</a>
         </p>
         <p class="mb-0">
            <a href="register.html" class="text-center">Register a new membership</a>
         </p>
      </div>
   </div>
</div>
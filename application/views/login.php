<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Login | Ambrosia Ayurved Account</title>
  <meta name="description" content="Log in to your Ambrosia Ayurved account" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

  <style>
    * {
      box-sizing: border-box;
    }

    html,
    body {
      margin: 0;
      padding: 0;
      height: 100%;
      font-family: 'Open Sans', sans-serif;
      overflow-x: hidden;
    }

    .main-container {
      min-height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      padding: 20px;
      background: url(<?php echo base_url('/assets/images/loginn_now.webp') ?>) no-repeat center center;
      background-size: cover;
      z-index: 1 !important;
      margin-top: 30px;
    }
     #loginPage .offcanvas-backdrop {
    pointer-events: none !important;
    opacity: 0 !important
    }

    .form-container {
      background-color: rgba(255, 255, 255, 0.9);
      padding: 30px 20px;
      border-radius: 10px;
      max-width: 380px;
      width: 100%;
      box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
      margin-left: 387px;
      margin-top: 2px;
    }

    .form-title {
      font-weight: 700;
      font-size: 18px;
      margin-bottom: 20px;
    }

    .form-control {
      border: none;
      border-bottom: 1px solid #ccc;
      border-radius: 0;
      padding-left: 0;
      margin-bottom: 15px;
      font-size: 14px;
      box-shadow: none !important;
    }

    .form-control:focus {
      border-bottom: 1px solid #000;
      box-shadow: none;
    }

    .form-right {
      padding: 25px 20px;
      width: 391px;
      margin-left: 432px;
      background-color: white;
      box-shadow: 2px 10px 20px gray
    }

    .form-label {
      font-weight: 500;
      margin-bottom: 5px;
      color: #333;
    }

    .login-btn {
      background-color: rgb(112, 214, 195);
      color: white;
      border: none;
      height: 45px;
      border-radius: 5px;
      font-weight: 600;
      width: 100%;
      margin-top: 10px;
    }

    .login-btn:hover {
      background-color: rgb(100, 200, 180);
    }

    .remember-me {
      display: flex;
      align-items: center;
      margin: 15px 0;
      font-size: 14px;
    }

    .remember-me input {
      margin-right: 8px;
    }

    .forgot-link {
      color: #666;
      text-decoration: none;
      display: block;
      text-align: right;
      font-size: 14px;
    }

    .forgot-link:hover {
      color: #0D6EFD;
    }

    .register-link {
      text-align: center;
      margin-top: 20px;
      font-size: 14px;
    }

    .register-link a {
      color: rgb(112, 214, 195);
      font-weight: 600;
      text-decoration: none;
    }

    .register-link a:hover {
      color: #0D6EFD;
    }

    .alert,
    .alert-danger {
      padding: 10px 15px;
      margin-bottom: 20px;
      color: #842029;
      border-radius: 5px;
      text-align: center;
      font-size: 16px;
      font-weight: bold;
    }

    .website-link {
      margin-top: 20px;
    }

    .link-home {
      color: white !important;
      background-color: rgb(13, 143, 117);
      padding: 6px 12px;
      border-radius: 5px;
      text-decoration: none;
      font-weight: 600;
    }

    .link-home:hover {
      background-color: rgb(21, 121, 101);
      color: white !important;
    }

    @media (max-width: 576px) {
      .form-container {
        background-color: rgba(255, 255, 255, 0.95);
        padding: 25px 15px;
        display: contents;
      }

      .main-container {
        background: none;
      }

      .form-right {
        margin-left: 0px
      }

      .form-title {
        font-size: 20px;
      }

      .form-control,
      .login-btn {
        height: 40px;
        font-size: 15px;
      }

      .remember-me,
      .forgot-link,
      .register-link {
        font-size: 13px;
      }

      .link-home {
        font-size: 14px;
        padding: 5px 10px;
      }
    }
  </style>
</head>

<body id="loginPage">
  <div class="main-container">

    <!-- start -->
    <!-- <div class="form-container form-right">
      <h2 class="form-title">Login</h2>
      <h6 class="text-success" style="color:darkgreen !important;"><?php echo $this->session->flashdata('success'); ?></h6>

      <?php if ($this->session->flashdata('message')): ?>
        <div class="alert alert-danger mb-3">
          <?php echo $this->session->flashdata('message'); ?>
        </div>
      <?php endif; ?>

    
        <div class="mb-3">
          <label for="email" class="form-label">Email:</label>
          <input type="email" class="form-control" placeholder="Email Address" required
            value="<?php echo get_cookie('email') ? get_cookie('email') : ''; ?>">
          <?php echo form_error('email', '<small class="text-danger">', '</small>'); ?>
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Password:</label>
          <div class="input-group">
            <input type="password" class="form-control" placeholder="Password" required
              value="<?php echo get_cookie('password') ? get_cookie('password') : ''; ?>">
            <span class="input-group-text toggle-password" style="cursor: pointer;">
              <i class="fa fa-eye"></i>
            </span>
          </div>
          <?php echo form_error('password', '<small class="text-danger">', '</small>'); ?>
        </div>

        <a href="<?php echo base_url('forgotPasswordPage'); ?>" class="forgot-link">Forgot your password?</a>

        <div class="remember-me">
          <input type="checkbox" name="remember" id="remember" <?php echo get_cookie('email') ? 'checked' : ''; ?>>
          <label for="remember">Remember me</label>
        </div>

        <button type="submit" class="btn login-btn">Login</button>

        <div class="register-link">
          Don't have an account? <a href="<?php echo base_url('registerpage'); ?>">Register here</a>
        </div>
      </form>
    </div> -->

    <!-- End -->

    <div class="form-right w- p-4 shadow" style="background-color: white; border-radius: 10px;">
      <h3 class="text-center" style="color: mediumseagreen; font-weight: 700;">Login</h3>
      <h6 class="text-success" style="color:darkgreen !important;"><?php echo $this->session->flashdata('success'); ?></h6>
      <?php if ($this->session->flashdata('message')): ?>
        <div class="alert alert-danger mb-3">
          <?php echo $this->session->flashdata('message'); ?>
        </div>
      <?php endif; ?>

      <form action="<?php echo base_url('login') ?>" method="post">
        <div class="mb-3">
          <label for="mobile" class="form-label fw-bold">Mobile Number:</label>
          <input type="text"
            class="form-control"
            name="mobile"
            placeholder="Enter 10-digit mobile number"
            maxlength="10"
            required
            value="<?php echo get_cookie('mobile') ? get_cookie('mobile') : ''; ?>">
          <?php echo form_error('mobile', '<small class="text-danger">', '</small>'); ?>
        </div>


        
        <div class="mb-3 position-relative">
  <label for="password" class="form-label fw-bold">Password:</label>
  <div class="input-group">
    <input type="password" name="password" id="passwordInput" class="form-control"
      placeholder="Password" required 
      value="<?php echo get_cookie('password') ? get_cookie('password') : ''; ?>"
      style="border-right: none !important; padding-right: 40px !important;">
    
    <span class="input-group-text toggle-password" id="togglePassword"
      style="cursor: pointer !important; background-color: #fff !important; border-left: none !important; position: absolute !important; top: 33% !important; right: 0px !important; transform: translateY(-50%) !important; z-index: 10 !important;">
      <i class="fa fa-eye" id="eyeIcon"></i>
    </span>
  </div>
  <?php echo form_error('password', '<small class="text-danger">', '</small>'); ?>
</div>



        <div class="justify-content-between align-items-center mb-3">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="remember" />
            <label class="form-check-label" for="remember">Remember me</label>
          </div>
        </div>
        <a href="<?php echo base_url('forgotPasswordPage'); ?>" class="text-decoration-none text-muted justify-end">Forgot your password?</a>

        <button type="submit" class="btn w-100 mb-3" style="background-color: #5fd4c0; color: white; font-weight: 600;">
          Login
        </button>

        <div class="text-center">
          <span>Don't have an account? </span>
          <a href="<?php echo base_url('registerpage'); ?>" class="fw-bold text-success text-decoration-none">Register here</a>
        </div>
      </form>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const togglePassword = document.querySelector('.toggle-password');
        const password = document.getElementById('password');

        togglePassword.addEventListener('click', function() {
          const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
          password.setAttribute('type', type);
          this.querySelector('i').classList.toggle('fa-eye-slash');
        });
      });
    </script>
    <script>
  document.getElementById("togglePassword").addEventListener("click", function () {
    const passwordInput = document.getElementById("passwordInput");
    const icon = document.getElementById("eyeIcon");

    if (passwordInput.type === "password") {
      passwordInput.type = "text";
      icon.classList.remove("fa-eye");
      icon.classList.add("fa-eye-slash");
    } else {
      passwordInput.type = "password";
      icon.classList.remove("fa-eye-slash");
      icon.classList.add("fa-eye");
    }
  });
</script>


</body>

</html>
<nav class="navbar navbar-expand-lg bg-body-tertiary navbar-light bg-light shadow">
  <div class="container-fluid">
  <a class="navbar-brand " href="<?=SITE_URL?>">
      <img src="<?=$action->helper->loadimage('logo.png')?>" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
      Krishna's Resume Builder
    </a>
    </div>
    </nav>
    <section style="height: 100vh;
    background: url('assets/images/signup-login.png') no-repeat center;
    background-size: cover;
    display: flex;
    align-items: center;
    position: relative;">
    
<div class="text-center">
<img src="assets/images/main-logo.png" alt="Resume logo" class="home-logo rounded"><br>
</div>


<div class="wrapper1 d-flex justify-content-center align-items-center"> 
    
<main class="form-signin w-100 m-auto text-center my-5">
  <form method="post" action="<?=$action->helper->url('action/login')?>">
    <img class="mb-4" src="<?=$action->helper->loadimage('logo-png.png')?>" alt="" width="72" >
    <h1 class="h2 mb-3 fw-normal">   Please Sign In To Your Account    </h1>

    
    <div class="form-floating ">
      <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" required>
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required>
      <label for="floatingPassword">Password</label>
    </div>

    <!--div class="form-check text-start my-3">
      <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
        Remember me
      </label>
    </div-->
    <button class="btn btn-primary w-100 py-2" type="submit">Log-in</button>
    
    <a href="<?=$action->helper->url('signup')?>" class="d-block mt-2 text-decoration-none">Create new Account</a>
    
  </form>
</main>
</div>
</section>
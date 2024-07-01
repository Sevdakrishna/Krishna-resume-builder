<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?=SITE_URL?>">
      <img src="<?=$action->helper->loadimage('logo.png')?>" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
      Krishna's Resume Builder
    </a>


    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">

<?php if($action->user_id()): ?>
          <li class="nav-item">
            <a class="nav-link <?=@$home?>" aria-current="page" href="<?=$action->helper->url('home')?>"><i class="bi bi-house-fill"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?=@$dashboard?>" aria-current="page" href="<?=$action->helper->url('dashboard')?>"><i class="bi bi-box-fill"></i> My-Resumes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?=@$profile?>" href="<?=$action->helper->url('profile')?>"><i class="bi bi-person-square"></i> Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=$action->helper->url('action/logout')?>"><i class="bi bi-box-arrow-right"></i> Log Out</a>
          </li>

<?php else: ?>
          <li class="nav-item">
            <a class="nav-link" href="<?=$action->helper->url('login')?>"><i class="bi bi-box-arrow-right"></i> Log In</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=$action->helper->url('signup')?>"><i class="bi bi-person-plus-fill"></i> Sign Up</a>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>

<div class="wrapper">
  

<main>
  <section class="d-flex align-items-center" style="height: 130vh;
  background: url('assets/images/back-photo.png') no-repeat center;
  background-size: cover;">
    <div class="container text-center">
      <img src="assets/images/main-logo.png" alt="Resume logo" class="home-logo rounded mb-4">
      <div class="row align-items-center justify-content-center con">
        <div class="col-md-8 text-md-start">
          <h1 class="hero-title">Create a Professional Resume in Minutes</h1>
          <p class="hero-subtitle">Stand out with our easy-to-use resume builder.</p>
          <a href="<?=$action->helper->url('dashboard')?>" class="btn btn-primary btn-lg">Get Started</a>
        </div>
        <div class="col-md-4 text-center mt-4 mt-md-0">
          <img src="assets/images/logo-png.png" alt="Krishna's Cartoon Image" class="home-image img-fluid">
        </div>
      </div>
    </div>
  </section>

    <section id="features">
    <div class=" displays mt-2 ">
        <h1 style="color: aliceblue; text-shadow: 2px 2px 4px black; "  class="my-3 text-center">Key Features</h1>
         <hr style="color:#0d006f;" class="mb-5"><div style="color:#0d006f;" class="row justify-content-between ">
        <div class="col-6 mb-5">
        <div class="home-img"><img src="assets/images/home-img (2).png"  alt="Easy to Use"></div>
            <hr><h3 style="color:black; font-style:italic;"><i class="bi bi-send-arrow-up"></i>  <a href="<?=$action->helper->url('home')?>"> Easy-to-Use Editor </a></h3>
            <p>Easy to Understand functionality with customizable templates.</p>
            <hr>
        </div>
        
        <div class="col-6 mb-3">
            <div class="home-img"><img src="assets/images/select-temp.png"  alt="Templates"></div>
            <hr><h3 style="color:black; font-style:italic;"><i class="bi bi-send-arrow-up"></i> <a href="<?=$action->helper->url('select-template')?>"> Professional Templates </a></h3>
            <p>Choose from a variety of professionally designed templates.</p>
        <hr>
        </div>
        <hr class="mb-5">
        </div>
        


        <div style="color:#0d006f;" class="row justify-content-between ">
        <div class="col-6 mb-5">
        <div class="home-img"><img src="assets/images/dashboard.png"  alt="Download"></div>
            <hr><h3 style="color:black; font-style:italic;"><i class="bi bi-send-arrow-up"></i> <a href="<?=$action->helper->url('dashboard')?>"> Download & Share</a></h3>
            <p>Easily download or share your resume in multiple formats.</p>
        <hr>
        </div>
        <div class="col-6 mb-5">
        <div class="home-img"><img src="assets/images/ex-display.png"  alt="Preview"></div>
            <hr><h3 style="color:black; font-style:italic;"><i class="bi bi-send-arrow-up"></i><a href=""> Real-Time Preview</a></h3>
            <p>See changes as you make them with our real-time preview.</p>
        <hr>
        </div>
        <hr>
        
        </div>
        </div>
    </section> 
    </main>
    
    </div>
    
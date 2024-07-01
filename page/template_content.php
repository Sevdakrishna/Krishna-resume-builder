<div class="container my-3">
<h1 class="text-center my-3" style="color: antiquewhite; text-shadow: 2px 2px 4px black; ">Select Your Resume Template.</h1>

<div class="row row-cols-2 row-cols-my-1 g-6">
  <div class="col">
    <div class="card">
      <img src="<?=$action->helper->loadimage('template-1.png')?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Default CV Template</h5>
        <p class="card-text">This is a simple and free template. </p>
        <a href="<?=$action->helper->url('resumebuilder/1')?>" class="btn btn-sm btn-success"><i class="bi bi-folder-plus"></i> Create</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="<?=$action->helper->loadimage('templat-2.png')?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Template - 2</h5>
        <p class="card-text">This is a another type of the template.</p>
        <a href=" <?=$action->helper->url('resumebuilder/2')?>" class="btn btn-sm btn-success"><i class="bi bi-folder-plus"></i> Create</a>
    </div>
    </div>
  </div>
  <!--div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div-->
</div>
</div>
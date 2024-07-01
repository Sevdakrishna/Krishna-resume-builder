
<div class="container">


    <a href="<?=$action->helper->url('select-template')?>" class="btn btn-light  my-2"><i class="bi bi-plus-circle"></i> Create New Resume</a>
    
<?php
foreach($resumes as $resume){
?>
<div class="card my-3 dash">
  <div class="card-body">
    <h5 class="card-title"><?=$resume['headline']?></h5>
    <p style="color:black;" class="card-text"><?=$resume['objective']?></p>
    <div class="row justify-content-between ">
    <p class="card-text col-6 mb-3">Created At : <?=$resume['created_at']?></p>  
    </div>
    <a href="#" class="btn btn-primary"><i class="bi bi-pencil-square"></i> Edit</a>
    <a href="<?=$action->helper->url("action/delete/".$resume['url'])?>" class="btn btn-danger"><i class="bi bi-trash"></i> Delete</a>
    <a href="<?=$action->helper->url("resume/".$resume['url'])?>" class="btn btn-success"><i class="bi bi-file-earmark-medical"></i> View</a>
    <a href="#" class="btn btn-warning" onclick="copyurl('<?=$action->helper->url("resume/".$resume['url'])?>5')" ><i class="bi bi-browser-chrome"></i> URL</a>
  </div>
</div>
<?php
}

if(count($resumes)<1){
?>
<div class="card my-3">
  <div class="card-body">
    <h1 class="text-center text-muted"><i class="bi bi-cloud-drizzle-fill"></i> No Resume Available</h1>
  </div>
</div>
</div>
<?php
}
?>

</div>





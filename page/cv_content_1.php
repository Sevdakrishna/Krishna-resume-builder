<?php
$resume['contact'] = str_replace("\\", "", $resume['contact']);
$resume['skills'] = str_replace("\\", "", $resume['skills']);
$resume['experience'] = str_replace("\\", "", $resume['experience']);
$resume['education'] = str_replace("\\", "", $resume['education']);

$contact = json_decode($resume['contact']);
$skills = json_decode($resume['skills']);
$experiences = json_decode($resume['experience']);
$education = json_decode($resume['education']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="<?=$action->helper->loadcss('cv_content_1.css')?>">
    <link rel="icon" href="<?=$action->helper->loadimage('logo.png')?>">
    
    <style>
        /* Custom Styles */
        @media (max-width: 767px) {
            .resume-header, .resume-body, .resume-footer {
                text-align: center;
            }
        }
    </style>
    
    <title><?=@$title?></title>
</head>
<body>

<div class="container">
    <div class="resume-header py-4">
        <div class="row">
            <div class="col-md-6">
                <h1><?=@$resume['name']?></h1>
                <h2><?=@$resume['headline']?></h2>
            </div>
            <div class="col-md-6 text-md-right">
                <h3><?=$contact->mobile?></h3>
                <h3><a href="mailto:<?=$contact->email?>"><?=$contact->email?></a></h3>
                <h3><?=$contact->address?></h3>
            </div>
        </div>
    </div>
    
    <div class="resume-body py-4">
        <div class="row mb-4">
            <div class="col-md-3">
                <h2>Objective</h2>
            </div>
            <div class="col-md-9">
                <p class="enlarge"><?=@$resume['objective']?></p>
            </div>
        </div>
        
        <div class="row mb-4">
            <div class="col-md-3">
                <h2>Skills</h2>
            </div>
            <div class="col-md-9">
                <?php foreach($skills as $skill): ?>
                    <ul class="talent">
                        <li><?=$skill?></li>
                    </ul>
                <?php endforeach; ?>
            </div>
        </div>
        
        <div class="row mb-4">
            <div class="col-md-3">
                <h2>Experience</h2>
            </div>
            <div class="col-md-9">
                <?php if(count($experiences) < 1): ?>
                    <div class="job last">
                        <h3>Fresher</h3>
                    </div>
                <?php endif; ?>
                <?php foreach($experiences as $experience): ?>
                    <div class="job">
                        <h2><?=$experience->company?></h2>
                        <h3><?=$experience->jobrole?></h3>
                        <h4><?=$experience->w_duration?></h4>
                        <p><?=$experience->work_desc?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        
        <div class="row mb-4">
            <div class="col-md-3">
                <h2>Education</h2>
            </div>
            <div class="col-md-9">
                <?php if(count($education) < 1): ?>
                    <div class="job">
                        <h3>No Education</h3>
                    </div>
                <?php endif; ?>
                <?php foreach($education as $edu): ?>
                    <div class="job">
                        <h2><?=$edu->university?></h2>
                        <h3><?=$edu->course?></h3>
                        <h4>( <?=$edu->e_duration?> )</h4>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    
    <div class="resume-footer py-4 text-center">
        <p><?=@$resume['name']?> &mdash; <a href="mailto:<?=$contact->email?>"><?=$contact->email?></a> &mdash; <?=$contact->mobile?></p>
    </div>
</div>


</body>
</html>

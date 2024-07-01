<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <?php
    if(@$type==1){
    ?>
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" media="all" />
    <link rel="stylesheet" href="<?=$action->helper->loadcss('cv_content_1.css')?>">
    
    <?php
    }
    elseif(@$type==2){
    ?>
    <link rel="stylesheet" href="<?=$action->helper->loadcss('main.css')?>">
    <link rel="stylesheet" href="<?=$action->helper->loadcss('cv_content_2.css')?>">

   <?php
    }
    ?> 
    <link rel="stylesheet" href="<?=$action->helper->loadcss('main.css')?>">
    <link rel="icon" href="<?=$action->helper->loadimage('logo.png')?>">
    <title><?=$title?></title>



</head>
<body>


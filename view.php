<?php
require 'inc/autoload.php';
getView('header');
$template = Template::get($_GET['id']);
$template->counterView();
?>

<div class="row">
    <div class="box">
        <div class="col-lg-12">
            <hr>
            <h2 class="intro-text text-center">Title
                <strong>Template</strong>
            </h2>
            <hr>
        </div>
        <div class="col-lg-7 text-center">
            <img class="img-responsive img-border img-full" src="img/<?php echo $template->preview; ?>" alt="">
        </div>
        <div class="col-lg-5 text-center">
            <h2><?php echo $template->name; ?>
                <br>
                <small>12/10/2016</small>
            </h2>
            <p>Gioi thieu san pham</p>
            <a href="<?php echo getRootUri('/download.php?id='.$template->id); ?>" class="btn btn-default btn-lg">Download</a>
        </div>
       
    </div>
</div>

<?php getView('footer') ?>
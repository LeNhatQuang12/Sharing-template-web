<?php
require 'inc/autoload.php';
getView('admin/header'); 
$query = getRequestUri()['query'];
$page = isset($query['p'])?$query['p']:'dashboard';
?>

<div class="row">
    <div class="box">
        <div class="col-lg-12">
            <hr>
            <h2 class="intro-text text-center"><strong><?php echo $page; ?> manager</strong>
            </h2>
            <hr>
        </div>
        <div class="col-lg-12">
            <?php getView('admin/'.$page); ?>
        </div>
    </div>
</div>

<?php getView('admin/footer'); ?>
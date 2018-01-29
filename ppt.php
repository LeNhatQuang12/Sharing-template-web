<<?php
require 'inc/autoload.php';
getView('header');
?>
<div class="row">
    <div class="box">
        <div class="col-lg-12">
            <hr>
            <h2 class="intro-text text-center">All
            <strong>Templates</strong>
            </h2>
            <hr>
        </div>
        <div class="col-sm-4 text-center">
            <img class="img-responsive" src="img\ppt1.jpg" alt="">
            <div id="option" class="col-12">
                <ul>
                    <?php if(User::isLoggedIn()){ ?>
						<li><a href="<?php echo getRootUri('/download.php?id=1'); ?>">Download</a></li>
					<?php } ?>
                    <li><a href="view.html">View</a></li>
                    <li><a href="#">Discuss</a></li>
                    
                </ul>
            </div>
            <br>
        </div>
        <div class="col-sm-4 text-center">
            <img class="img-responsive" src="img\ppt2.jpg" alt="">
            <div id="option" class="col-12">
                <ul>
                    <?php if(User::isLoggedIn()){ ?>
						<li><a href="<?php echo getRootUri('/download.php?id=1'); ?>">Download</a></li>
					<?php } ?>
                    <li><a href="view.html">View</a></li>
                    <li><a href="#">Discuss</a></li>
                    
                </ul>
            </div>
            <br>
        </div>
        <div class="col-sm-4 text-center">
            <img class="img-responsive" src="img\ppt3.jpg" alt="">
            <div id="option" class="col-12">
                <ul>
                    <?php if(User::isLoggedIn()){ ?>
						<li><a href="<?php echo getRootUri('/download.php?id=1'); ?>">Download</a></li>
					<?php } ?>
                    <li><a href="view.html">View</a></li>
                    <li><a href="#">Discuss</a></li>
                    
                </ul>
            </div>
            <br>
        </div>
        <div class="col-sm-4 text-center">
            <img class="img-responsive" src="img\ppt4.jpg" alt="">
            <div id="option" class="col-12">
                <ul>
                    <?php if(User::isLoggedIn()){ ?>
						<li><a href="<?php echo getRootUri('/download.php?id=1'); ?>">Download</a></li>
					<?php } ?>
                    <li><a href="view.html">View</a></li>
                    <li><a href="#">Discuss</a></li>
                    
                </ul>
            </div>
            <br>
        </div>
        <div class="col-sm-4 text-center">
            <img class="img-responsive" src="img\ppt5.jpg" alt="">
            <div id="option" class="col-12">
                <ul>
                    <?php if(User::isLoggedIn()){ ?>
						<li><a href="<?php echo getRootUri('/download.php?id=1'); ?>">Download</a></li>
					<?php } ?>
                    <li><a href="view.html">View</a></li>
                    <li><a href="#">Discuss</a></li>
                    
                </ul>
            </div>
            <br>
        </div>
        <div class="col-sm-4 text-center">
            <img class="img-responsive" src="img\ppt6.jpg" alt="">
            <div id="option" class="col-12">
                <ul>
                    <?php if(User::isLoggedIn()){ ?>
						<li><a href="<?php echo getRootUri('/download.php?id=1'); ?>">Download</a></li>
					<?php } ?>
                    <li><a href="view.html">View</a></li>
                    <li><a href="#">Discuss</a></li>
                    
                </ul>
            </div>
            <br>
        </div>
        <div class="col-sm-4 text-center">
            <img class="img-responsive" src="img\ppt7.jpg" alt="">
            <div id="option" class="col-12">
                <ul>
                    <?php if(User::isLoggedIn()){ ?>
						<li><a href="<?php echo getRootUri('/download.php?id=1'); ?>">Download</a></li>
					<?php } ?>
                    <li><a href="view.html">View</a></li>
                    <li><a href="#">Discuss</a></li>
                    
                </ul>
            </div>
            <br>
        </div>
        <div class="col-sm-4 text-center">
            <img class="img-responsive" src="img\ppt8.jpg" alt="">
            <div id="option" class="col-12">
                <ul>
                    <?php if(User::isLoggedIn()){ ?>
						<li><a href="<?php echo getRootUri('/download.php?id=1'); ?>">Download</a></li>
					<?php } ?>
                    <li><a href="view.html">View</a></li>
                    <li><a href="#">Discuss</a></li>
                    
                </ul>
            </div>
            <br>
        </div>
        <div class="col-sm-4 text-center">
            <img class="img-responsive" src="img\ppt9.jpg" alt="">
            <div id="option" class="col-12">
                <ul>
                    <?php if(User::isLoggedIn()){ ?>
						<li><a href="<?php echo getRootUri('/download.php?id=1'); ?>">Download</a></li>
					<?php } ?>
                    <li><a href="view.html">View</a></li>
                    <li><a href="#">Discuss</a></li>
                    
                </ul>
            </div>
            <br>
        </div>
        <div class="clearfix"></div>
        <div class="col-lg-12 text-center">
            <ul class="pager">
                <li class="previous"><a href="#">&larr; Older</a>
            </li>
            <li class="next"><a href="#">Newer &rarr;</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php getView('footer') ?>
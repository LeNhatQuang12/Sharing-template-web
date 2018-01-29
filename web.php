<?php
require 'inc/autoload.php';
getView('header');
?>
<div class="row">
	<div class="box">
		<div class="col-lg-12">
			<hr>
			<h2 class="intro-text text-center">Website
			<strong>Templates</strong>
			</h2>
			<hr>
		</div>
		<?php
		$templates = Template::getAll('web');
		foreach ($templates as $template) { ?>
		<div class="col-sm-4 text-center">
			<img class="img-responsive" src="img/<?php echo $template->preview ?>" alt="">
			<div id="option" class="col-12">
				<ul>
					<?php if(User::isLoggedIn()){ ?>
						<li><a href="<?php echo getRootUri('/download.php?id='.$template->id); ?>">Download</a></li>
					<?php } ?>
					<li><a href="<?php echo getRootUri('/view.php?id='.$template->id); ?>">View</a></li>
					<li><a href="#">Discuss</a></li>
					
				</ul>
			</div>
			<br>
		</div>
		<?php } ?>
		<div class="clearfix"></div>
		<div class="col-lg-12 text-center">
			<ul class="pager">
				<li class="previous"><a href="#">&larr; Older</a>
			</li>
			<li class="next">
			<a href="#">Newer &rarr;</a>
			</li>
			</ul>
		</div>
	</div>
</div>
<?php getView('footer'); ?>
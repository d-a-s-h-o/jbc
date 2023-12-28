<?php include('perch/runtime.php');?>
<?php include('includes/head.html'); ?>


<div class="container-fluid">
	<div class="row">
		<?php perch_content('MasterNav'); ?>
	</div>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-2 col-sm-3">
			<?php include('includes/leftNav.html'); ?>
		</div>
		<div class="col-md-10 col-sm-9">
			<div class="content">
				<?php perch_content('Publications'); ?>
			</div>
		</div>
	</div>
</div>

    
<?php include('includes/bottom.html'); ?> 
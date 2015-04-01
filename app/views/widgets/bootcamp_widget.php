		<div class="col-lg-4 col-md-6">

			<div class="panel panel-default">

			  <div class="panel-heading" data-container="body" data-i18n="[title]widget.bootcamp.info" title="Totals since this data is being collected">

			    <h3 class="panel-title"><i class="fa fa-bullseye"></i> <span data-i18n="widget.bootcamp.title">Boot Camp</span></h3>

			  </div>

			  <div class="panel-body text-center">
			  	<?php
			  	$queryobj = new bootcamp_model();
				$sql = "SELECT COUNT(1) as total,
								COUNT(CASE WHEN (bootcamp_status LIKE 'Installed'
								) THEN 1 END) AS isinstalled
								FROM bootcamp;";
				$obj = current($queryobj->query($sql));
				?>
				<?php if($obj): ?>
				<a href="<?php echo url('show/listing/bootcamp'); ?>" class="btn btn-danger">
					<span class="bigger-150"> <?php echo $obj->isinstalled; ?> </span><br>
					<span data-i18n="widget.bootcamp.installed">Installed</span>
				</a>
				<a href="<?php echo url('show/listing/bootcamp'); ?>" class="btn btn-success">
					<span class="bigger-150"> <?php echo $obj->total - $obj->isinstalled; ?> </span><br>
					<span data-i18n="widget.bootcamp.notinstalled">Not Installed</span>
				</a>
				<?php endif; ?>

			  </div>

			</div><!-- /panel -->

		</div><!-- /col -->

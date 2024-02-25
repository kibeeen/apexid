<?php /* Template Name: Page - Project */ ?>

<?php 
	get_header();
	$page_id 	= get_page_by_title('project')->ID;
	$content_id	= get_post()->ID;
	if(empty($page_id)){
		$page_id = 74;
	}
	if($content_id == $page_id){
		$content_id = 1;
	}
?>


<!-- STATIC PAGE BANNER -->
<div class="page-banner" style="background-image: url( <?php the_field('page_banner_bg','options'); ?> ); ">
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-center">
					<div class="banner-header">
						<h1><?php the_field('page_banner_title','options'); ?></h1>
						<img src="<?php the_field('page_banner_divider','options'); ?>">
						<h2><?php the_field('page_banner_subtitle','options'); ?></h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- BREADCRUMBS -->
<div class="apex-breadcrumbs">
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-center">
					<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
					    <?php if(function_exists('bcn_display')) { bcn_display(); } ?>
				    </div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- PROJECT PAGE STARTS HERE -->
<div class="project-page" style="background-image: url( <?php the_field('download_page_background'); ?> ); ">
	<div class="container-fluid">
		<div class="row blog-row">
			<div class="col-xs-11 col-sm-10 col-md-9 col-lg-8  col-center">

				<div class="page-header-sm center">
					<h1><?php the_field('download_page_title'); ?></h1> 
					<h3>-</h3>
				</div>

				<div class="project-container" id="download-container">

				<?php 

					$projects = get_field('download_projects_repeater');

					if($projects){
							foreach($projects as $project){
							?>

							<div class="row">
								<div class="col-xs-12">
									<a href=" <?php echo $project['project_file']; ?> " target="_blank">
										<div class="fp-box-inner">
											<div class="p-box">
												<div class="p-low-box center">
													<h5><?php echo $project['project_name'] ?></h5>
												</div>
											</div>
										</div>
									</a>
								</div>
							</div>

							<?php
						}
					}


				 ?>

				</div>

			</div>
		</div>
	</div>
</div>




<?php get_footer(); ?>
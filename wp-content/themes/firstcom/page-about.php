<?php /* Template Name: Page - About */ ?>

<?php get_header(); ?>

<div class="page-banner" style="background-image: url( <?php the_field('page_banner_bg','options'); ?> ); ">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 ">
				<div class="banner-header">
					<h1><?php the_field('page_banner_title','options'); ?></h1>
					<img src="<?php the_field('page_banner_divider','options'); ?>">
					<h2><?php the_field('page_banner_subtitle','options'); ?></h2>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="apex-breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
				    <?php if(function_exists('bcn_display')) { bcn_display(); } ?>
			    </div>
			</div>
		</div>
	</div>
</div>

<div class="about-us">
	<div class="container">
		<div class="row">
			<div class="col-xs-11">

				<div class="row">
					<div class="col-sm-12 col-md-6 about-img-box pull-right">
						<img src=" <?php the_field('au_image'); ?> " class="not-cloned-img img-responsive">
						<div class="cloned-box">
							<img src=" <?php the_field('au_image'); ?> " class="cloned-img">
						</div>
					</div>
					<div class="col-sm-12 col-md-6 about-content-box">
						<div class="page-header-sm">
							<h1><?php the_field('about_us_title'); ?></h1>
							<h4><?php the_field('au_subtitle'); ?></h4>
							<div class="about-us-wysiwig">
								<?php the_field('au_text'); ?>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-12 col-md-6 about-img-box">
						<img src=" <?php the_field('wwo_image'); ?> " class="not-cloned-img-2 img-responsive">
						<div class="cloned-box-2">
							<img src=" <?php the_field('wwo_image'); ?> " class="cloned-img-2">
						</div>
					</div>

					<div class="col-sm-12 col-md-6 about-content-box">
						<div class="page-header-sm">
							<h1><?php the_field('what_we_offer_title'); ?></h1>
							<?php 
								$offers = get_field('wwo_repeater');
								if($offers){
									foreach($offers as $offer){
										?>
											<div class="wwo-box">
												<div class="row">
													<div class="col-sm-1 col-xs-2">
														<div class="wwo-icon-box">
															<img src=" <?php echo $offer['offer_icon']; ?> " class="img-responsive">
														</div>
													</div>
													<div class="col-sm-11 col-xs-10">
														<div class="wwo-content">
															<h5><strong> <?php echo $offer['offer_title']; ?></strong></h5>
															<p> <?php echo $offer['offer_text']; ?> </p>
														</div>
													</div>
												</div>
											</div>			
										<?php
									}
								}
							 ?>
							
						</div>
					</div>
				</div>
                
                
                <div class="accreditations">
					<h2><?php echo get_field('our_accreditation'); ?></h2>
					   
					<?php
					    $accreds = get_field('accreditation_repeater');
					    if ($accreds){
					        foreach($accreds as $accred){
					            ?>
					                <img src=" <?php echo $accred['accreditor_logo']; ?> ">
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
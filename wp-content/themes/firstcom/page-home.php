<?php /* Template Name: Page - Home */ ?>

<?php get_header(); ?>

<div class="home-banner" style="background-image: url( <?php the_field('home_banner_bg'); ?> ); ">
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-center">
					<div class="home-banner-box">
						<h1><?php the_field('home_banner_title'); ?></h1>
						<img src=" <?php the_field('h_banner_divider'); ?> ">
						<h3><?php the_field('home_banner_subtitle'); ?></h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<div class="home-project">
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-center">

					<div class="page-headers">
						<h1><?php the_field('featured_projects_title'); ?></h1>
					</div>

					<div class="container">

					<?php

						$counter1 = 1;

						// NUMBER OF ITEMS TO BE DISPLAYED
						$no_per_page = get_field('total_view_item',$page_id);
						if($no_per_page==false){
							$no_per_page = 16;
						}
						$page_no = isset($_GET['page_no']) ? intval($_GET['page_no']) : 1;

						$cat_id  = get_term_id();
						if(is_tax('featured_projects')){
						   $tax[] = array(
						       'taxonomy' => 'featured_projects',
						       'field'    => 'term_id',
						       'terms'    => $cat_id,
						   );
						}

						$wp_query = new WP_Query(array(
	                            'post_type' => 'project_page',
	                            'posts_per_page' => -1,
	                            'showposts' => $no_per_page,
	                            'paged' => $page_no,
	                            'post_status' => 'publish',
	                            'orderby' => 'menu_order',
	                            'order' => 'DESC',
	                            'tax_query' => array(
	                        array (
	                        'taxonomy' => 'featured_projects',
	                        'field' => 'slug',
	                        'terms' => 'featured-project',
	                        )
	                        ),
	                            
	                        )
	                    );

						// QUERY THE CATEGORIES
						if ($wp_query->have_posts()) {
						    $max_num_pages = $wp_query->max_num_pages;
						    while ($wp_query->have_posts()) {
						        $wp_query->the_post();
						        $p        	 = $wp_query->post;
						        $post_id   	 = $p->ID;
						     	$title       = $p->post_title;
						     	$location    = get_field('project_location',$post_id);
						        $image		 = get_field('project_thumbnail',$post_id);
						        $icon 		 = get_field('project_category_icon',$post_id);
						        $link 		 = get_permalink($post_id);

						        if($counter1 == 1) {
						        	echo "<div class='row fp-box'>";
						        }

						        ?>
						     
								<div class="col-xs-12 col-sm-6 col-md-3">
									<a href=" <?php echo $link; ?> ">
										<div class="fp-box-inner">
											<div class="p-box">
												
												<div class="p-up-box">
													<img src="<?php echo $image; ?>">
													<div class="p-icon center">
														<img src="<?php echo $icon ?>">
													</div>
												</div>
												<div class="p-low-box center">
													<h5><?php echo $title ?></h5>
													<h6><?php echo $location ?></h6>
												</div>
											</div>
										</div>
									</a>
								</div>
									




								<?php 
								$counter1++;

								if($counter1 == 5) {
									echo "</div>";
									$counter1 = 1;
								}
							} 

							?>
							<?php
						}
						wp_reset_query();
					?>					

						</div> <!-- end of row -->

						<div class="apex-btn-box">
							<h5>
								<a class="apex-btn" href="<?php the_field('fp_button_link'); ?>">
									<?php the_field('fp_button_text') ?>
								</a>
							</h5> <!-- end of apex-button -->
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="home-about" style="background-image: url( <?php the_field('home_about_banner_bg'); ?> ); ">
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-center">

					<div class="container">
						<div class="row row-home-about">
							<div class="col-sm-6 col-md-6">
								<div id="carousel-home-about">
								<?php 
									$i = 0;
									$images = get_field('ha_image_repeater');
									// debug($images);
									$array = [];

									foreach($images as $image){
										
										$array[$i] = $image['ha_image'];
										$i++;
									}
								 ?> 
								
								<img src=" <?php echo $array[0]; ?> " class="not-cloned-img-3 img-responsive">
								<div class="cloned-box-3">
									<img src=" <?php echo $array[1]; ?> " class="cloned-img-3 img-responsive">
								</div>

								</div>
							</div>
							<div class="col-sm-6 col-md-6 col-home-about">
								<div class="page-headers">
									<h1><?php the_field('home_about_title'); ?></h1>
								</div>
								<h4><?php the_field('home_about_subtitle'); ?></h4>
								<div id="home-about-wysiwig">
									<?php the_field('home_about_desc'); ?>
								</div>
								<div class="apex-btn-box">
									<h5>
										<a class="apex-btn" href="<?php the_field('ha_button_link'); ?>">
											<?php the_field('ha_button_text') ?>
										</a>
									</h5> <!-- end of apex-button -->
								</div>							
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</div>
</div>


<div class="home-testimonial" style="background-image: url( <?php the_field('testimonial_banner_bg'); ?> ); ">
	<div class="container-fluid">
		<div class="row row-testi">
			<div class="col-xs-12 col-sm-12 col-md-5 testi-box-1">
				<div class="page-headers">
					<h1><?php the_field('testimonial_title'); ?></h1>
				</div>		
				<p><?php the_field('testimonial_desc'); ?></p>					
			</div>
			<div class="col-xs-12 col-sm-12 col-md-7 testi-box-2 clearfix" style="background-image: url( <?php the_field('testimonial_slider_bg'); ?> ); ">


				<div id="slick-carousel-testi" class="slick-carousel-testi">
					<?php  
						$testis = get_field('testimonial_repeater');
						if($testis){
							foreach($testis as $testi){
						?>
						<div>
							<div class="testi-row row">
								<div class="testi-photo col-sm-4 col-md-2 col-xs-12">
									<img src=" <?php echo $testi['client_logo']; ?> " class="img-responsive">
								</div>
								<div class="testi-content col-sm-8 col-md-10 col-xs-12">
									<div class="testi-title">
										<h5><?php echo $testi['client_name']; ?></h5>
										<h5><?php echo $testi['client_position']; ?></h5>
									</div>
									<div class="testi-testi">
										<p><?php echo $testi['client_testimonial']; ?></p>
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

	</div>
</div>


<div class="prev-clients">
	<div class="container">
		<div class="row">
			<div class="container">
				<div class="col-xs-12 col-center">

					<div class="page-headers">
						<h1><?php the_field('prev_clients_title'); ?></h1>
					</div>

					<div id="prev-clients-slider" class="prev-clients-slider">
						<!-- <div class="row"> -->
							<?php
							$clients = get_field('prev_clients_repeater');
							if($clients){
								foreach ($clients as $client) {
									?>
										<div class="col-md-2 prev-slider-col">
											<img src="<?php echo $client['prev_company_logo'] ?>" class="prev-slider-img">
										</div>
									<?php
								}
							} 

							
							?>
						<!-- </div> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
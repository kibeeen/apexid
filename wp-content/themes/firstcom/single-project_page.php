<?php /* Template Name: Single - Project */ ?>

<?php $page_id = get_page_by_title('Project')->ID;
    $post = get_post(); 
    if(empty($page_id)){
        $page_id = 74;
    }
?>

<?php get_header(); ?>

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


<!-- BLOG PAGE STARTS HERE -->
<div class="project-page" style="background-image: url( <?php the_field('page_project_background', '74'); ?> ); ">
	<div class="container-fluid">
		<div class="container">
			<div class="row blog-row">
				<div class="col-xs-12 col-center">

					<div class="row">
						<div class="col-sm-12 center-slider-container">
							<div class="center-slider" id="center-slider">
								<?php 

									$photos = get_field('project_image_repeater');

									foreach($photos as $photo){
										?>
											<a href="<?php echo $photo['image']; ?>" class="html5lightbox" data-group="mygroup" data-width="1280" data-width="720">
												<img src=" <?php echo $photo['image']; ?> " class="project-imgs" >
											</a>
										<?php
									}

								 ?>
							</div>

						</div>

						<div class="col-sm-8" id="inner-project-wysiwig">
							<div class="page-header-sm inner-project-title">
	                            <h1><?php echo the_title(); ?></h1>
	                        </div>
							<?php echo apply_filters('the_content',get_post()->post_content);
							?>
							
							<div class="rel-blogs-container">
							    <div class="row">

							        <div class="page-header-sm rel-header">
							            <h1><?php echo get_field('project_related_blogs_title','74') ?></h1> 
							        </div>

							        <?php 
							       		
							       		// SINGLE PAGE OF PROJECTS - RELEVANT BLOGS SECTION
									  	$ctr = 0;
									  	$values = get_field('project_relevant_blogs');
									  	// debug($values);
									  	if($values){
									    	foreach ($values as $value) {
									     	$ctr++;
									     	$post_id = url_to_postid( $value['related_blog_name']); 
									    	$post = get_post($post_id);
									    	$title = $post->post_title;
									    	$post_link = get_permalink($post_id);
									    	$project_thumb = get_field('project_thumbnail',$post_id);
									    	$project_name = get_field('project_name',$post_id);
									    	$date = date('d/m/Y', strtotime($post->post_date));
									     ?>
									        <div class="col-sm-6">
									            <div class="blog-box">
													<a href=" <?php echo $post_link ?>">
														<div class="b-box">
															<div class="b-up-box center">
																<img src="<?php echo get_field('blog_featured_image') ?>">
																<div class="b-icon">
																	<img src="<?php echo get_field('blog_category_icon') ?>">
																</div>
															</div>
															<div class="b-low-box">
																<h5><?php the_title(); ?></h5>
																<span class="b-date">
																	<img src="<?php echo get_field('blog_calendar_icon','options') ?>">
																	<?php echo $date; ?>
																</span>
															</div>
														</div>
													</a>
												</div>
									        </div>

									  		<?php
									    		if($ctr == 2){
									     			echo"</div><div class = 'row'>";
									     			$ctr = 0;
									    		}
									   		}
								    		wp_reset_postdata();
									   	}

									?>

							    </div>
							</div>


						</div>



						<div class="col-sm-4">
	                        <!-- RELEVANT PROJECTS -->
	                        <div class="page-headers-xs">
	                            <h4><?php echo get_field('project_related_projects_title','74') ?></h4>
	                            <ul class="ul-rel-projs">

	                            <?php 
						       		
						       		// SINGLE PAGE OF PROJECTS - RELEVANT BLOGS SECTION
								  	$ctr = 0;
								  	$projs = get_field('project_relevant_projects');
								  	// debug($projs);
								  	if($projs){
								    	foreach ($projs as $proj) {
								     	$ctr++;
								     	$post_id = url_to_postid( $proj['related_project_name']); 
								    	$post = get_post($post_id);
								    	$title = $post->post_title;
								    	$post_link = get_permalink($post_id);
								    	$project_thumb = get_field('project_thumbnail',$post_id);
								    	$project_name = get_field('project_name',$post_id);
								    	// $date = date('d/m/Y', strtotime($post->post_date));
								     ?>
								        
	                                <li><h5><a href=" <?php echo $post_link ?> "><?php echo $title; ?> <i class="fa fa-angle-right" aria-hidden="true"></i></a></h5></li>

								  		<?php
								    		
								   		}
								   		wp_reset_postdata();
								   	}
								?>

	                                
	                            </ul>
	                           
	                        </div>
						</div>	



					</div>

				</div>
			</div>
		</div>
	</div>
</div>









<?php get_footer(); ?>
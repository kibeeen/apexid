<?php /* Template Name: Page - Project */ ?>

<?php ?>

<?php 
	get_header();
	$page_id 	= get_page_by_title('Project')->ID;
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
<div class="project-page" style="background-image: url( <?php the_field('page_project_background'); ?> ); ">
	<div class="container-fluid">
		<div class="container">
			<div class="row blog-row">
				<div class="col-xs-12 col-center">

					<div class="page-header-sm center">
						<h1><?php the_field('page_project_title', $page_id); ?></h1> 
					</div>

					<!-- TAXONOMY NAVBAR DISPLAY -->
					<?php
					    $terms = get_terms( 'project_categories', array(
					        'post_status' 	=> 'publish',
							'orderby'  		=> 'ID',
							'order' 	 	=> 'ASC'
					    ) );

					    if(!empty($terms)){
					    	$num   = count($terms);
					    	$link  = get_permalink($page_id);
					    	$all   = '';
					    	if ($content_id == 1) {
					    		$all = 'active-project';
					    	}
					    	?>
					    	<ul class="list-inline center projs-cats">
					    		<li><a class=" <?php echo $all;?>" href="<?php echo $link;?>">All</a></li>
					    	<?php
					        foreach ($terms as $key=>$term){
					            $id 	   = $term->term_id;
					            $title 	   = $term->name;
							    $term_link = get_term_link( $term );
							    if(is_tax('project_categories')){
							        $selected = get_term_id()==$id ? 'active-project' : '';
							    }
						    ?>

						    <li><a class=" <?php echo $selected;?>" href="<?php echo $term_link;?>"><?php echo $title;?></a></li>

						    <?php
							 }?>
							</ul>
							<?php
					}?>

					<div class="row">
						<div class="col-md-12">
							<?php

								$counter1 = 1;
								
								// NUMBER OF ITEMS TO BE DISPLAYED
								$no_per_page = get_field('total_view_item',$page_id);
								if($no_per_page==false){
									$no_per_page = 9999;
								}
								$page_no = isset($_GET['page_no']) ? intval($_GET['page_no']) : 1;

								$cat_id  = get_term_id();
								if(is_tax('project_categories')){
								   $tax[] = array(
								       'taxonomy' => 'project_categories',
								       'field'    => 'term_id',
								       'terms'    => $cat_id,
								   );
								}

								$wp_query = new WP_Query(array(
								        'post_type' 	 => 'project_page',
								        'posts_per_page' => -1,
								        'showposts' 	 => $no_per_page,
								        'paged' 		 => $page_no,
								        'post_status' 	 => 'publish',
								        'orderby' 		 => 'ID',
								        'order' 		 => 'ASC',
								        'tax_query' 	 => $tax,
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
								        	echo "<div class='row row-projects'>";
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
						</div>

						<div class="col-sm-10">
							Hello
						</div>
					</div>

					<!-- LOAD MORE BUTTON -->
					<div class="apex-btn-box center">
						<h5><a class="apex-btn" >LOAD MORE</a></h5>
					</div>
					
                    <script type="text/javascript">

						jQuery(document).ready(function($){
							$(".project-container").find(".row-projects:hidden:lt(4)").show();
						});


						$(function () {
						    $(".apex-btn").on("click", function () {
						      //  alert('true');
						        $(".project-container").find(".row-projects:hidden:lt(4)").show();
						    });
						});
					</script>

				</div>
			</div>
		</div>
	</div>
</div>
<!-- 	</div>
</div> -->


<?php get_footer(); ?>
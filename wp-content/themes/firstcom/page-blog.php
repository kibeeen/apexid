<?php /* Template Name: Page - Blog */ ?>

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
<div class="blog-page" style="background-image: url( <?php the_field('blog_page_background'); ?> ); ">
	<div class="container-fluid">
		<div class="container">
			<div class="row blog-row">
				<div class="col-xs-12 col-center">

					<div class="page-header-sm">
						<h1><?php the_field('blog_page_title'); ?></h1> 
					</div>

					<div class="blog-container">
						<div class="row blog-row">


							<div class="col-sm-4 blog-sidebar pull-right clearfix">
								<!-- <form method="post">
									<input type="text" name="apex-search" id="apex-search" placeholder="Search..." class="search-btn">
								</form> -->

								<!-- LATEST BLOGS -->
								<!-- <div class="page-headers-xs">
									<h4>Recent Posts</h4>
									<hr>

									<?php
			                        $no_per_page = 9;
			                        $page_no = isset($_GET['page_no']) ? intval($_GET['page_no']) : 1;
			                        $ctr  = 1;
			                        $ctr2 = 1;

			                        

			                        $wp_query = new WP_Query(array(
			                                'post_type'      => 'blog_page',
			                                'posts_per_page' => -1,
			                                'showposts'      => $no_per_page,
			                                'paged'          => $page_no,
			                                'post_status'    => 'publish',
			                                'orderby'        => 'date',
			                                'order'          => 'DESC'
			                            )
			                        );

			                        if ($wp_query->have_posts()) {
			                            $max_num_pages = $wp_query->max_num_pages;
			     
			                            while ($wp_query->have_posts()) {
			                                $wp_query->the_post();
			                                $post    = $wp_query->post;
			                                $post_id = $post->ID;
			                                $title   = $post->post_title;
			                                $summary = get_field('post_summary',$post_id);
			                                $img     = get_field('image',$post_id);
			                                $date    = date('d/m/Y', strtotime($post->post_date));
			                                $url     = get_permalink($post_id);
				                        	?>

										<h5><a href="<?php $url ?>"><?php the_title(); ?></a></h5>

			                        	<?php
			                            }
			                        }
			                        wp_reset_query();
			                        ?>
								</div> -->

								<!-- RECENT PROJECTS -->
								<div class="page-headers-xs">
									<h4>Recent Projects</h4>
									<hr>
									<?php
			                        $no_per_page = 3;
			                        $page_no = isset($_GET['page_no']) ? intval($_GET['page_no']) : 1;
			                        $ctr  = 1;
			                        $ctr2 = 1;

			                        $wp_query = new WP_Query(array(
			                                'post_type'      => 'project_page',
			                                'posts_per_page' => -1,
			                                'showposts'      => $no_per_page,
			                                'paged'          => $page_no,
			                                'post_status'    => 'publish',
			                                'orderby'        => 'date',
			                                'order'          => 'DESC',
			                            )
			                        );

			                        if ($wp_query->have_posts()) {
			                            $max_num_pages = $wp_query->max_num_pages;
			     
			                            while ($wp_query->have_posts()) {
			                                $wp_query->the_post();
			                                $post    = $wp_query->post;
			                                $post_id = $post->ID;
			                                $title   = $post->post_title;
			                                $summary = get_field('post_summary',$post_id);
			                                $img     = get_field('image',$post_id);
			                                $date    = date('d/m/Y', strtotime($post->post_date));
			                                $url     = get_permalink($post_id);
			                                //$css = 'wow zoomInDown';

				                        	?>

			                        	<!-- CODE STARTS HERE -->

										<h5><a href=" <?php echo $url; ?> "><?php the_title(); ?></a></h5>

			                        	<?php
			                            }
			                        }
			                        wp_reset_query();
			                        ?>
								</div>

								<!-- ARCHIVES MONTH-->
								<div class="page-headers-xs">
									 <h4>Archives by Month</h4>
									 <hr>
										<?php

	                                    $args1 = array(
	                                        'type'            => 'monthly',
	                                        'limit'           => '',
	                                        'format'          => 'html', 
	                                        'before'          => '',
	                                        'after'           => '',
	                                        'show_post_count' => true,
	                                        'echo'            => 1,
	                                        'order'           => 'DESC',
	                                        'post_type'       => 'blog_page'
	                                    );
                                    
	                                    echo '<ul class="archives_menu">';
	                                        wp_get_archives($args1); 

	                                    echo '</ul>';

                                        // debug(wp_get_archives($args1));

                                    	?>
								</div>

								<!-- ARCHIVES -->
								<div class="page-headers-xs">
									<h4>Archives by Year</h4>
									<hr>
									<?php
                                    $args = array(
                                        'type'            => 'yearly',
                                        'limit'           => '',
                                        'format'          => 'html', 
                                        'before'          => '',
                                        'after'           => '',
                                        'show_post_count' => false,
                                        'echo'            => 1,
                                        'order'           => 'DESC',
                                        'post_type'       => 'blog_page'
                                    );

                                    echo '<ul class="archives_menu">';
                                        wp_get_archives( $args );

                                    echo '</ul>';

                                        // debug(wp_get_archives($args1));
                                    ?>
								</div>

								

							</div>


								
						


							<div class="col-sm-8 blog-col-1 pull-left">
								<script type="text/javascript">
		                        	var $b = 1;
	                        	</script>

								<!-- BLOG THUMBNAIL QUERY STARTS HERE -->
								<?php

									$a = 1;

			                        $no_per_page = 4;
			                        $page_no = isset($_GET['page_no']) ? intval($_GET['page_no']) : 1;
			                        $ctr  = 1;
			                        $ctr2 = 1;

			                        if(is_archive()){
			                            $y = get_the_time( 'Y' );
			                            $date_query[]  = array(
			                                'year'  => $y
			                            );
			                        }

			                        $wp_query = new WP_Query(array(
			                                'post_type'      => 'blog_page',
			                                'posts_per_page' => -1,
			                                'showposts'      => $no_per_page,
			                                'paged'          => $page_no,
			                                'post_status'    => 'publish',
			                                'orderby'        => 'date',
			                                'order'          => 'DESC',
			                                'date_query'     => $date_query
			                            )
			                        );

			                        if ($wp_query->have_posts()) {
			                            $max_num_pages = $wp_query->max_num_pages;


			     
			                            while ($wp_query->have_posts()) {
			                                $wp_query->the_post();
			                                $post    = $wp_query->post;
			                                $post_id = $post->ID;
			                                $title   = $post->post_title;
			                                $summary = get_field('post_summary',$post_id);
			                                $img     = get_field('image',$post_id);
			                                $date    = date('l, F m, Y', strtotime($post->post_date));
			                                $url     = get_permalink($post_id);
			                                $author	 = get_the_author();
			                                $no_comments = get_comments_number();
			                                $content = apply_filters('the_content', $post->post_content);
			                                //$css = 'wow zoomInDown';

			                                if ($ctr == 1) {
			                                	$ctr2 = 0;
			                                	?>
			                                	<div class="row blogs-row">
			                                	<?php } ?>

				                        	<div class="col-sm-12 blog-post">
				                        		<h1><?php the_title(); ?></h1>
				                        		<h5>
				                        			<i class="fa fa-clock-o" aria-hidden="true"></i> 
				                        			<?php echo $date; ?>
			                        			</h5>
			                        			<h5>
				                        			<i class="fa fa-user" aria-hidden="true"></i>
				                        			<?php echo "POSTED BY : " . $author; ?>
			                        			</h5>
			                        			<h5>
				                        			<i class="fa fa-comment" aria-hidden="true"></i>
				                        			<?php echo $no_comments; ?>
			                        			</h5>

			                        			<div class="blog-post-content-box">
				                        			<div class="row mar-0 blog-post-line">
					                        			<div class="col-xs-4 col-red"></div>
					                        			<div class="col-xs-4 col-blue"></div>
					                        			<div class="col-xs-4 col-gray"></div>
				                        			</div>

				                        			<div class="row mar-0 blog-post-content">
				                        				<div class="col-sm-12 col-md-4">
				                        					<img src="<?php echo get_field('blog_featured_image') ?>" class="img-responsive blog-img">
				                        				</div>
				                        				<div class="col-sm-12 col-md-8 <?php echo 'col-md-8-' . $a; ?> ">
				                        					<p><?php echo $content; ?></p>
				                        				</div>
			                        					<a onclick="readMore(<?php echo $a; ?>)" class="btn btn-link" id="<?php echo "readmore" . $post_id ?>">READ MORE</a>
			                        					<input type="hidden" id="<?php echo 'hidden-postid' . $a; ?>" value="<?php echo $a; ?>">	
			                        					<?php $a++; ?>		                        					
				                        			</div>
			                        			</div>

				                        	</div>


				                        	<script type="text/javascript">

				                        		function readMore(a){
				                        			// alert('working');

				                        			
				                        			$('.blog-post-content .col-md-8-'+a).toggleClass('readmore');
				                        			$('.blog-post-content .col-md-8'+a).toggleClass('readmore:after');
				                        		}
												$b++;
				                        	</script>

			                        <?php
			                        		if($ctr==2) {
			                        			$ctr  = 0;
			                        			$ctr2 = 1;
			                        			?>
			                        			</div>
			                        			<?php
			                        		}

			                        		$ctr++;
			                            }

			                            if ($ctr2==0) {
			                            	echo '</div>';
			                            }
			                        ?>

									<!-- PAGINATION -->
									<?php
				                        if($max_num_pages > 1){
				                            ?>
				                            <div class="zoomInDown">
				                                <ul class="pagination">
				                                    <?php
				                                    $post_type = 'blog_page';
				                                    if(isset($_GET['post_type'])){
				                                        $post_type = '&post_type='.$_GET['post_type'];
				                                    }
				                                    my_pagination($max_num_pages, $page_no ,'',$post_type);
				                                    ?>
				                                </ul>
				                            </div>
				                            <?php
				                        }
				                        ?>
				                        <?php
				                    }
				                    wp_reset_query();
				                    ?>	
							</div>
						

						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
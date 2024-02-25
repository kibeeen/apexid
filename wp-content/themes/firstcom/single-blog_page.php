<?php /* Template Name: Single - Blog */ ?>

<!-- <?php $page_id = get_page_by_title('Blog')->ID;
    $post = get_post(); 
    if(empty($page_id)){
        $page_id = 78;
    }
?> -->

<?php get_header(); ?>

<!-- STATIC PAGE BANNER -->
<div class="page-banner" style="background-image: url( <?php the_field('page_banner_bg','options'); ?> ); ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-11 col-sm-10 col-md-9 col-lg-8 col-center">
                <div class="banner-header">
                    <h1><?php the_field('page_banner_title','options'); ?></h1>
                    <img src="<?php the_field('page_banner_divider','options'); ?>">
                    <h2><?php the_field('page_banner_subtitle','options'); ?></h2>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- BREADCRUMBS -->
<div class="apex-breadcrumbs">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-11 col-sm-10 col-md-9 col-lg-8  col-center">
                <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                    <?php if(function_exists('bcn_display')) { bcn_display(); } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- BLOG PAGE STARTS HERE -->
<div class="blog-page" style="background-image: url( <?php echo get_field('blog_page_background','78'); ?> ); ">
    <div class="container-fluid">
        <div class="row blog-row">
            <div class="col-xs-11 col-sm-10 col-md-9 col-lg-8  col-center">

                <div class="page-header-sm">
                    <h1><?php the_field('blog_page_title'); ?></h1> 
                </div>

                <div class="blog-container">
                    <div class="row blog-row">


                        <!-- SIDEBAR -->
                        <div class="col-sm-4 blog-sidebar pull-right clearfix">
                            <form method="post">
                                <input type="text" name="apex-search" id="apex-search" placeholder="Search..." class="search-btn">
                            </form>

                            <!-- LATEST BLOGS -->
                            <div class="page-headers-xs">
                                <h4>Latest Blog</h4>

                                <?php
                                $no_per_page = 3;
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

                                    <h5><a href=" <?php echo $url ?> "><?php the_title(); ?></a></h5>

                                    <?php
                                    }
                                }
                                wp_reset_query();
                                ?>

                            </div>

                            <!-- RECENT PROJECTS -->
                            <div class="page-headers-xs">
                                <h4>Recent Projects</h4>
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

                                    <h5><a href=" <?php echo $url ?> "><?php the_title(); ?></a></h5>

                                    <?php
                                    }
                                }
                                wp_reset_query();
                                ?>

                            </div>

                            <!-- ARCHIVES -->
                            <div class="page-headers-xs">
                                <h4>Archives</h4>

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

                                    wp_reset_query();
                                    ?>
                            </div>
                        </div>


                                <?php 
                                    $current_url    = "//".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 
                                    $post_id        = url_to_postid($current_url);
                                    $post           = get_post($post_id);
                                    $date           = date('d/m/Y', strtotime($post->post_date));
                                    $content        = apply_filters('the_content',get_post()->post_content);
                                    $title          = $post->post_title;
                                ?>


                        <!-- BLOG CONTENT -->
                        <div class="col-sm-8 blog-col-1 pull-left">
                            <div class="row blogs-row">
                                <div class="col-sm-12 ">
                                    <div class="inner-blog-box">
                                        <div class="inner-b-box">
                                            <div class="inner-b-up-box">
                                                <img src="<?php echo get_field('blog_featured_image') ?>">
                                                <div class="inner-b-icon">
                                                    <img src="<?php echo get_field('blog_category_icon',$post_id) ?>">
                                                </div>
                                            </div>
                                            <div class="inner-b-low-box">
                                                <h5><?php echo $title; ?></h5>
                                                <span class="inner-b-date">
                                                    <img src="<?php echo get_field('blog_calendar_icon','options') ?>">
                                                    <?php echo $date; ?>
                                                </span>
                                            </div>
                                            <div class="inner-blog-post">
                                                <?php echo $content; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            

                     

                            <div class="rel-projs-container">
                                <div class="row">

                                    <div class="page-header-sm rel-header">
                                        <h1><?php echo get_field('relevant_projects_title','78') ?></h1> 
                                    </div>

                                    <?php 
                                        
                                        // SINGLE PAGE OF PROJECTS - RELEVANT BLOGS SECTION
                                        $ctr = 0;
                                        $projs = get_field('related_post_repeater');
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
                                            $location = get_field('project_location',$post_id);
                                            $cat_icon = get_field('project_category_icon',$post_id);
                                            $date = date('d/m/Y', strtotime($post->post_date));
                                         ?>
                                            
                                        <div class="col-sm-4">
                                            <a href=" <?php echo $post_link ?> ">
                                                <div class="fp-box-inner">
                                                    <div class="p-box">
                                                        <div class="p-up-box center">
                                                            <img src="<?php echo $project_thumb; ?>">
                                                            <div class="p-icon-new">
                                                                <img src="<?php echo $cat_icon;  ?>">
                                                            </div>
                                                        </div>
                                                        <div class="p-low-box-new">
                                                            <h5><?php echo $title; ?></h5>
                                                            <h6><?php echo $location; ?></h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                            <?php
                                                if($ctr == 3){
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
                    

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>



<?php get_footer(); ?>
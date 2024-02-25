<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="<?php echo get_field('favicon','options') ?>" type="image/x-icon">
    <title><?php wp_title('-','true','right'); ?><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <script type="text/javascript">
        var ht_next = "<?php echo get_field('ht_slider_next','options'); ?>";
        var ht_prev = "<?php echo get_field('ht_slider_prev','options'); ?>";

        var proj_next = "<?php echo get_field('inner_page_slider_next','74'); ?>";
        var proj_prev = "<?php echo get_field('inner_page_slider_prev','74'); ?>";
    </script>
    
    <script src='https://www.google.com/recaptcha/api.js'></script>

</head>

<div class="floating-icon">
    <a href="<?php echo get_field('floating_contact_us_link','options'); ?>" >
        <img src=" <?php echo get_field('floating_contact_us','options'); ?> ">
    </a>
</div>


<body <?php body_class(); ?> onresize="fluidPadding()">
    <header>

        <div class="container-fluid">
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="row">
                    <div class="container">
                        <div class="col-xs-12 col-center">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#ApexidNav">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span> 
                                </button>
                                <a class="navbar-brand" href=" <?php echo get_home_url();  ?> ">
                                    <img src="<?php echo get_field('company_logo', 'options') ?>">
                                </a>
                            </div>
                            <div class="collapse navbar-collapse" id="ApexidNav">
                                <?php
                                    $options = array(
                                        'sort_column' => 'menu_order',
                                        'theme_location' => 'main_nav',
                                        'container' => false,
                                        'items_wrap' => '<ul class="ul-main-nav list-inline nav navbar-nav navbar-right">%3$s'
                                        );
                                        wp_nav_menu($options); 
                                ?>
                                        <li><a target="_blank" href=" <?php echo get_field('facebook_page_link','options') ?> "><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        </ul>
                            </div>
                        </div> <!-- end of col-sm-8 -->
                    </div> <!-- end of row -->
                </div>
            </nav>
        </div>

    </header>


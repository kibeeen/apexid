<?php /* Template Name: Page - Login */ ?>

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

<!-- PAGE LOGIN STARTS HERE -->
<div class="login-page" style="background-image: url( <?php the_field('login_page_background'); ?> ); ">
		<div class="row blog-row">
			<div class="container">
				<div class="col-xs-12 col-sm-12 col-md-9  col-center">

					<div class="row">
						<div class="col-sm-6 col-center">
							<div class="login-container">
									<div class="page-header-sm">
										<h1><?php the_field('login_box_title'); ?></h1> 
									</div>
									<form class='form-login' method="POST">
										<input type="text" class="form-control apex-control login-control" id="login_name" name="login_name" required placeholder="Name*">
										<input type="email" class="form-control apex-control login-control" id="login_email" name="login_email" required placeholder="Email*">
										<button class="btn btn-link forgot-pass">Forgotten Password</button>
										<div class="apex-btn-box">
											<input type="submit" class="login-btn" value="SUBMIT">
										</div>

									</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>

<?php get_footer(); ?>
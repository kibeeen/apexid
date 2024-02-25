<?php /* Template Name: Page - Contact */ ?>

<?php if(is_page('Contact')){ $contact = "true"; } ?>

<?php get_header(); ?>


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



<div class="contact-us" style="background-image: url( <?php the_field('contact_us_bg'); ?> ); ">
	<div class="container-fluid">
		<div class="row contact-row">
			<div id="contact-col-1">
				<div class="col-sm-3">
					<div class="page-header-sm contact-header">
						<h1><?php the_field('contact_us_title'); ?></h1>
						<h4><?php the_field('cu_contact_section_title'); ?></h4>
					</div>

					<div class="cu-repeater-box">
						<?php 
							$contacts = get_field('cu_repeater');
							if($contacts){
								foreach($contacts as $contact){
									?>
									<div class="cu-box">
										<div class="row">
											<div class="col-sm-1 col-xs-12">
												<div class="cu-icon-box">
													<img src=" <?php echo $contact['cu_contact_icon']; ?> " class="img-responsive">
												</div>
											</div>
											<div class="col-sm-11 col-xs-12">
												<div class="cu-content">
													<h5><strong> <?php echo $contact['cu_contact_name']; ?></strong></h5>
													<p> <?php echo $contact['cu_contact_detail']; ?> </p>
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
			
			<div id="contact-col-2">
				<div class="col-sm-6 geo-maps">
					<?php the_field('google_map_embed_code'); ?>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="touch-us">

	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-11 col-sm-10 col-md-9 col-lg-8  col-center">
				<div class="page-header-sm contact-header">
					<h1><?php the_field('cu_form_title'); ?></h1>
				</div>
			</div>
		</div>
	</div>


	<div class="container-fluid">

		<div class="row">
			<div class="col-xs-11 col-sm-10 col-md-9 col-lg-8 col-center">
				<?php echo do_shortcode(get_field('apex_contact_form_short_code')); ?>
				
			<!-- <form id="apex-form" method="POST">
				<div class="row">
					<div class="col-sm-4">
						<div class="form-group">
							<label for="ap_name">Name:</label><span class="required">*</span>
							<input type="text" class="form-control apex-control" id="ap_name" name="ap_name" required>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label for="ap_contact">Contact:</label><span class="required">*</span>
							<input type="tel" class="form-control apex-control" id="ap_contact" name="ap_contact" required>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label for="ap_email">Email:</label><span class="required">*</span>
							<input type="email" class="form-control apex-control" id="ap_email" name="ap_email" required>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-6 col-md-3">
						<div class="form-group">
						  	<label for="sel1">Select list:</label>
						  	<select class="form-control apex-control" id="sel1">
							  	<option selected="selected" disabled>--- Select Amount ---</option>
							    <option>1</option>
							    <option>2</option>
							    <option>3</option>
							    <option>4</option>
						  	</select>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="form-group">
						  	<label for="sel1">Select list:</label>
						  	<select class="form-control apex-control" id="sel1">
							  	<option selected="selected" disabled>--- Select services ---</option>
							    <option>1</option>
							    <option>2</option>
							    <option>3</option>
							    <option>4</option>
						  	</select>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="form-group">
						  	<label for="sel1">Select list:</label>
						  	<select class="form-control apex-control" id="sel1">
							  	<option selected="selected" disabled>--- Select size range ---</option>
							    <option>1</option>
							    <option>2</option>
							    <option>3</option>
							    <option>4</option>
						  	</select>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="form-group">
							<label for="usr">Commencement Date:</label>
							<input type="date" class="form-control apex-control" id="usr">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-12">
						<div class="form-group">
							<label for="usr">Message:</label><span class="required">*</span>
							<textarea rows="10" class="form-control apex-control" id="usr"></textarea>
						</div>
					</div>
				</div>

				<div class="captcha-box">
				    <div class="g-recaptcha" data-sitekey="6Ld0BTUUAAAAAIOWerDEw4Z1vhwAW2fUDOCg-EAp"></div>

				</div>
				<div class="apex-btn-box center">
					<input type="submit" class="apex-btn" value="SUBMIT">
				</div>
			</form> -->
			
			</div>
		</div>
	</div>

</div>



<script type="text/javascript">

    

	var breadCrumbs = document.getElementsByClassName('col-center')[1];
    var getMarginLeft = window.getComputedStyle(breadCrumbs, null);

    var fluid_padding = getMarginLeft.marginLeft;

    // alert(fluid_padding);

	document.getElementById("contact-col-1").style.paddingLeft = fluid_padding;


	function fluidPadding() {
	var breadCrumbs = document.getElementsByClassName('col-center')[1];
    var getMarginLeft = window.getComputedStyle(breadCrumbs, null);

    var fluid_padding = getMarginLeft.marginLeft;
	document.getElementById("contact-col-1").style.paddingLeft = fluid_padding;
	}
</script>






<?php get_footer(); ?>
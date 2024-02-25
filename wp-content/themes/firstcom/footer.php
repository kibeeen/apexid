        <footer style="background-image: url( <?php echo get_field('footer_bg','options'); ?> ); ">
            <div class="container-fluid">
                <div class="row">
                    <div class="container">
                        <div class="col-sm-12 col-center">
                            <div class="row footer-row">

                                <div class="col-sm-6">
                                    <img src=" <?php echo get_field('footer_logo','options') ?> ">
                                    <p class="footer-desc"><?php echo get_field('footer_desc','options') ?> </p>
                                </div>

                                <div class="col-sm-6">
                                    <div class="footer-contact-box">
                                        <h5><?php echo get_field('footer_title_1','options') ?></h5>
                                        <span class="footer-contact"><?php echo get_field('company_address_1','options') ?></span>
                                        <span class="footer-contact"><?php echo get_field('company_address_2','options') ?></span>
                                        <span class="footer-contact"><?php echo get_field('company_tel_1','options') ?></span>
                                        <span class="footer-contact"><?php echo get_field('company_email','options') ?></span>
                                    </div>
                                </div>

                            </div> <!-- end of row -->

                            <hr class="footer-hr">

                            <div class="row copyright">
                                <div class="col-sm-6">
                                    <?php the_field('copyright', 'option'); ?>
                                </div>
                                <div class="col-sm-6">
                                    <div class="firstcom">
                                        <img src=" <?php the_field('firstcom_logo', 'option'); ?> "> &nbsp;<?php the_field('web_design_by', 'option'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
    </html>
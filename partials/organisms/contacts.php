<section class="contact-us left-circle-class">
    <div class="container">
        <div class="default-title">
            <h2><?php _e('CONTACT US', 'simplify'); ?></h2>
        </div>
        <div class="contact-us__main">
            <div class="contact-us__main__block p-0 col-12 col-lg-6">
                <div class="contact-us__main__block__info">
                    <h4>
                        <img src="<?php echo get_template_directory_uri() . '/html_template/build/assets/img/email-icon.png'; ?>"/>
                        <?php _e('Email:', 'simplify'); ?>
                    </h4>
                    <p>
                        <a href="mailto:<?php the_field('e-mail', 'option'); ?>"><?php the_field('e-mail', 'option'); ?></a>
                    </p>
                </div>
                <div class="contact-us__main__block__info">
                    <h4>
                        <img src="<?php echo get_template_directory_uri() . '/html_template/build/assets/img/phone-icon.png'; ?>"/>
                        <?php _e('Phone:', 'simplify'); ?>
                    </h4>
                    <p><a href="tel:<?php the_field('phone', 'option'); ?>"><?php the_field('phone', 'option'); ?></a>&nbsp;<?php _e('Project Team', 'simplify'); ?>
                    </p>
                </div>
                <div class="contact-us__main__block__info">
                    <h4>
                        <img src="<?php echo get_template_directory_uri() . '/html_template/build/assets/img/location-icon.png'; ?>"/>
                        <?php _e('Address:', 'simplify'); ?>
                    </h4>
                    <a href="javascript:void(0)"><?php echo get_field('address', 'option'); ?></a>
                </div>
            </div>
            <div class="contact-us__main__form-container p-0 col-12 col-lg-6">
                <?php echo do_shortcode('[contact-form-7 id="5" title="Footer contact form" html_class="contact-us__main__form-container__content" html_id="contact"]'); ?>
            </div>
        </div>
    </div>
</section>

<div class="over-hidden">
    <div id="map"></div>
    <footer class="footer ">
        <div class="container position-relative circle-style">
            <div class="footer__copyright ">
                <p><?php the_field('copyright_text', 'option'); ?></p>
            </div>
        </div>
    </footer>
</div>
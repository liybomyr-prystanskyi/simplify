<?php if (!is_page_template('template-contact.php')) : ?>
    <section class="contact-us  ">
        <div class="container">
            <div class="default-title">
                <h2><?php _e('CONTACT US', 'simplify'); ?></h2>
                <p></p>
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
                        <p>
                            <a href="tel:<?php the_field('phone', 'option'); ?>"><?php the_field('phone', 'option'); ?></a>&nbsp;<?php _e('Project Team', 'simplify'); ?>
                        </p>
                    </div>
                    <div class="contact-us__main__block__info">
                        <h4>
                            <img src="<?php echo get_template_directory_uri() . '/html_template/build/assets/img/location-icon.png'; ?>"/>
                            <?php _e('Address:', 'simplify'); ?>
                        </h4>
                        <p><a href="javascript:void(0)"><?php echo get_field('address', 'option'); ?></a></p>
                    </div>
                </div>
                <div class="contact-us__main__form-container p-0 col-12 col-lg-6">
                    <?php echo do_shortcode('[contact-form-7 id="5" title="Footer contact form" html_class="contact-us__main__form-container__content" html_id="contact"]'); ?>
                </div>
            </div>
        </div>
    </section>
    <div class="over-hidden">
        <footer class="footer ">
            <div class="container position-relative">
                <div class="footer__copyright ">
                    <p><?php the_field('copyright_text', 'option'); ?></p>
                </div>
            </div>
        </footer>
    </div>
    <?php wp_footer(); ?>
<?php else : ?>
    <?php wp_footer(); ?>
    <?php $map = get_field('map_marker', 'option') ?>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDoLs4jh4_7ZW16LDVDAXDPGISWv9RN-x8&callback=initMap"
            async defer></script>
    <!-- Map -->
    <script type="text/javascript">
        function initMap() {
            var coords = {
                lat: <?php echo $map['lat']; ?>,
                lng: <?php echo $map['lng']; ?>
            };
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 16,
                center: coords
            });
            var marker = new google.maps.Marker({
                position: coords,
                map: map,
                icon: "<?php echo get_template_directory_uri() . '/html_template/build/assets/img/marker.png'; ?>"
            });
        }
    </script>
<?php endif; ?>
</body>

</html>

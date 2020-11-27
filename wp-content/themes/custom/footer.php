<?php
wp_footer();
?>

<footer>
    <div class="description-container">
        <h3><?= bloginfo('name') ?></h3>
        <p><?= get_field('description', 'option'); ?></p>
        <div class="description-icon-container">

            <?php if (have_rows('social_medias', 'option')) :
                while (have_rows('social_medias', 'option')) : the_row(); ?>

                    <a href="<?= get_sub_field("social_media_url") ?>"><img src="<?= get_sub_field("social_media_image") ?>">FB</img></a>

            <?php endwhile;
            endif; ?>

        </div>
    </div>

    <div class="opening-hours-container">
        <h4>Opening Hours</h4>

        <?php if (have_rows('opening_hours', 'option')) :
            while (have_rows('opening_hours', 'option')) : the_row(); ?>

                <div>
                    <i class="far fa-clock"></i>
                    <p><?= get_sub_field('day_description', 'option'); ?></p>
                    <div></div>
                    <p><?= get_sub_field('hours_description', 'option'); ?></p>

                </div>

        <?php endwhile;
        endif; ?>

    </div>

    <div class="contact-us-container">
        <h4>Contact</h4>
        <p><i class="fas fa-phone"></i><?= get_field('phone', 'option'); ?></p>
        <p><i class="fas fa-envelope"></i><?= get_field('mail', 'option'); ?></p>
        <p><i class="fas fa-map-marker-alt"></i><?= get_field('country_adress', 'option'); ?></p>
        <p class="margin-left"><?= get_field('street_adress', 'option'); ?></p>
    </div>
</footer>

</body>

</html>
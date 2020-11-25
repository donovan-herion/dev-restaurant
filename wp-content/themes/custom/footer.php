<?php
wp_footer();
?>

<footer>
    <div class="description-container">
        <h3><?= bloginfo('name') ?></h3>
        <p><?= get_field('description', 'option'); ?></p>
        <div class="description-icon-container">
            <span>FB</span>
            <span>FB</span>
            <span>FB</span>
            <span>FB</span>
        </div>
    </div>
    <div class="opening-hours-container">
        <h4>Opening Hours</h4>
        <p><?= get_field('monday_hour', 'option'); ?></p>
        <p>8am - 8pm</p>
        <p>8am - 8pm</p>
        <p>8am - 8pm</p>
        <p>8am - 9pm</p>
    </div>
    <div class="contact-us-container">
        <p><?= get_field('street_adress', 'option'); ?></p>
        <p><?= get_field('postalcode_adress', 'option'); ?></p>
        <p><?= get_field('country_adress', 'option'); ?></p>
        <p><?= get_field('mail', 'option'); ?></p>
        <p><?= get_field('phone', 'option'); ?></p>
    </div>
</footer>

</body>

</html>
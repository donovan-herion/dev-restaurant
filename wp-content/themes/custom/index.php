<?php
get_header();
?>

<header class="header-index">
    <h1><span class="title-block">OUR</span><span class="title-bottom">RECIPES</span></h1>
</header>

<div class="index_section_container">

    <?php if (have_posts()) {
        while (have_posts()) {
            the_post(); ?>

            <section class="recipe-container">
                <div class="card-container">
                    <h4><?= get_field("index_card_title", get_the_id()) ?></h4>
                    <h3><?= get_field("index_card_subtitle", get_the_id()) ?></h3>
                    <p><?= get_field("index_card_description", get_the_id()) ?></p>
                    <a href="<?php the_permalink() ?>" class="see-full-recipe-button">SEE FULL RECIPE</a>
                </div>
                <div class="recipe-image-container">
                    <img class="recipe-image" src="<?= get_field("index_card_image", get_the_id()) ?>" alt="">
                </div>
            </section>

    <?php }
    } ?>

    <div class="navigation-links">
        <?php posts_nav_link('  ...  ', '< Previous Page', '  Next Page >'); ?>
    </div>

</div>



<?php
get_footer();
?>
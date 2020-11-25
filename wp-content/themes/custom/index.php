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
                    <h4>Pudding</h4>
                    <h3>Mysterious and funny</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit culpa est ad eos magnam? Nobis itaque numquam inventore cumque consequuntur.</p>
                    <a class="see-full-recipe-button">SEE FULL RECIPE</a>
                </div>
                <div class="recipe-image"></div>
            </section>

    <?php }
    } ?>

</div>


<?php
get_footer();
?>
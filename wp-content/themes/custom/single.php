<?php
get_header();
?>

<header class="header-single"></header>

<?php if (have_posts()) {
    while (have_posts()) {
        the_post(); ?>

        <section class="single-recipe-container">
            <div class="recipe-info-container">
                <a href="<?= get_permalink(get_option('page_for_posts')) ?>">Previous Page</a>
                <p>
                    <? the_date() ?>
                </p>
                <div class="tag-container">
                    <span>Add</span>
                    <span>Tag</span>
                </div>
            </div>
            <h2 class="recipe-title">
                <?= get_field("index_card_title") ?>
            </h2>
            <p class="recipe-description">
                <?= get_field("index_card_description") ?>
            </p>
            <img src="<?= get_field("index_card_image") ?>" alt="" class="recipe-image">
            <div class="ingredients-container appear-on-scroll">
                <h3 class="ingredients-title">Ingredients</h3>
                <div class="meal-info">
                    <p class="people">For <?= get_field("number_of_people") ?> People</p>
                    <span>|</span>
                    <p class="duration">Preparation <?= get_field("time_required") ?> :</p>
                </div>






                <?php if (have_rows('ingredients')) :
                    while (have_rows('ingredients')) : the_row(); ?>

                        <div class="ingredient-row">
                            <p class="ingredient"><?= get_sub_field("ingredient") ?></p>
                            <span>:</span>
                            <p class="quantity-value"><?= get_sub_field("quantity") . " " . get_sub_field("value") ?></p>
                        </div>
                <?php endwhile;
                endif; ?>

            </div>

            <div class="instructions-container appear-on-scroll">
                <h3 class="instructions-title">Instructions</h3>

                <?php if (have_rows('instructions')) :
                    $i = 1;
                    while (have_rows('instructions')) : the_row();
                ?>

                        <div class="instruction-row">
                            <p class="iteration"><?= $i ?></p>
                            <p class="instruction-paragraph"><?= get_sub_field("instruction_paragraph") ?></p>
                        </div>

                <?php
                        $i = $i + 1;
                    endwhile;
                endif; ?>




            </div>
        </section>

<?php }
} ?>

</div>


<?php
get_footer();
?>
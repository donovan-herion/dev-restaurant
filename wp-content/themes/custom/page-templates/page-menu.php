<?php
/*
 * Template Name: Menu
 * description: >-
  Page template with header image
 */
?>

<?php
get_header();
?>

<header class="header-menu">
    <h1><span class="title-block">CHECK</span><span class="title-bottom">OUR MENU</span></h1>
</header>

<h2 class="menu_main_title appear-on-scroll"><?= get_field("main_title") ?></h2>

<div class="menu_section_container">


    <?php if (have_rows('first_section')) : ?>

        <h3 class="menu_section_title appear-on-scroll"><?= get_field("first_section_title") ?></h3>

        <?php while (have_rows('first_section')) : the_row();

            if (get_sub_field("first_section_meal_recommended") == 1) {
                $recommended = "recommended";
                $chef_selection = "chef_selection";
            } else {
                $recommended = "";
                $chef_selection = "none";
            } ?>


            <div class="<?= $chef_selection ?> appear-on-scroll">CHEF SELECTION</div>
            <div class="meal_description_container appear-on-scroll <?= $recommended ?>">
                <div class="trio">
                    <p><?= get_sub_field("first_section_meal_title") ?></p>
                    <div class="dotted_bottom"></div>
                    <p class="meal-price"><?= get_sub_field("first_section_meal_price") ?> €</p>
                </div>
                <p class="section_meal_paragraph"><?= get_sub_field("first_section_meal_paragraph") ?></p>
            </div>

    <?php endwhile;
    endif; ?>



    <?php if (have_rows('second_section')) : ?>
        <h3 class="menu_section_title appear-on-scroll"><?= get_field("second_section_title") ?></h3>
        <?php while (have_rows('second_section')) : the_row();

            if (get_sub_field("second_section_meal_recommended") == 1) {
                $recommended = "recommended";
                $chef_selection = "chef_selection";
            } else {
                $recommended = "";
                $chef_selection = "none";
            } ?>


            <div class="<?= $chef_selection ?> appear-on-scroll">CHEF SELECTION</div>
            <div class="meal_description_container appear-on-scroll <?= $recommended ?>">
                <div class="trio">
                    <p><?= get_sub_field("second_section_meal_title") ?></p>
                    <div class="dotted_bottom"></div>
                    <p class="meal-price"><?= get_sub_field("second_section_meal_price") ?> €</p>
                </div>
                <p class="section_meal_paragraph"><?= get_sub_field("second_section_meal_paragraph") ?></p>
            </div>

    <?php endwhile;
    endif; ?>


    <?php if (have_rows('third_section')) : ?>
        <h3 class="menu_section_title appear-on-scroll"><?= get_field("third_section_title") ?></h3>
        <?php while (have_rows('third_section')) : the_row();

            if (get_sub_field("third_section_meal_recommended") == 1) {
                $recommended = "recommended";
                $chef_selection = "chef_selection";
            } else {
                $recommended = "";
                $chef_selection = "none";
            } ?>


            <div class="<?= $chef_selection ?> appear-on-scroll">CHEF SELECTION</div>
            <div class="meal_description_container appear-on-scroll <?= $recommended ?>">
                <div class="trio">
                    <p><?= get_sub_field("third_section_meal_title") ?></p>
                    <div class="dotted_bottom"></div>
                    <p class="meal-price"><?= get_sub_field("third_section_meal_price") ?> €</p>
                </div>
                <p class="section_meal_paragraph"><?= get_sub_field("third_section_meal_paragraph") ?></p>
            </div>

    <?php endwhile;
    endif; ?>


</div>


<?php
get_footer();
?>
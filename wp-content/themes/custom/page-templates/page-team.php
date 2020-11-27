<?php
/*
 * Template Name: Team
 * description: >-
  Page template with header image
 */
?>

<?php
get_header();
?>

<header class="header-team">
    <h1><span class="title-block">MEET</span><span class="title-bottom">OUR TEAM</span></h1>
</header>

<h2 class="team_main_title appear-on-scroll"><?= get_field("main_title") ?></h2>

<div class="team_section_container">

    <?php if (have_rows('staff_members')) :
        while (have_rows('staff_members')) : the_row(); ?>

            <div class="team_card_container appear-on-scroll">
                <img class="team_card_img" src="<?= get_sub_field("staff_member_image") ?>" alt="">
                <p class="team_card_position"><?= get_sub_field("staff_member_position") ?></p>
                <p class="team_card_name"><?= get_sub_field("staff_member_name") ?></p>
                <p class="team_card_description"><?= get_sub_field("staff_member_description") ?></p>
            </div>

    <?php endwhile;
    endif; ?>

</div>


<?php
get_footer();
?>
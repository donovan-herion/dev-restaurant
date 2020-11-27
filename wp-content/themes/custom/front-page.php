<?php
get_header();
?>

<header class="header-front-page">
    <h1><span class="title-block">ENJOY</span><span class="title-bottom">HEAVY MEAL</span></h1>
</header>


<?php if (have_rows('page-redirection')) :
    while (have_rows('page-redirection')) : the_row(); ?>

        <section class="discover-menu appear-on-scroll" style="background-image: url(<?= get_sub_field("image") ?>)">
            <div class="container">
                <h4><?= get_sub_field("title") ?></h4>
                <h3><?= get_sub_field("subtitle") ?></h3>
                <div class="discover-menu-text-container">
                    <p><?= get_sub_field("first_description_paragraph") ?></p>
                    <p><?= get_sub_field("second_description_paragraph") ?></p>
                </div>
                <a href="<?= get_sub_field("page") ?>" class="check-menu-button">GO TO <?= get_sub_field("title") ?></a>
            </div>
        </section>

<?php endwhile;
endif; ?>




<?php
get_footer();
?>


<!-- <section class="blog-archive">
    <h2>Check our Blog</h2>
    <div class="archive-container">
        <div class="archive-card">
            <div class="card-image"></div>
            <p class="card-publication-date"><i class="far fa-clock"></i> 15th of September 2020</p>
            <h3 class="card-title">Article Title Here</h3>
            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi blanditiis tenetur atque.</p>
            <div class="card-more-info">
                <div class="card-more-info-line">...</div>
                <a class="card-more-info-button">More Info</a>
            </div>
        </div>
        <div class="archive-card">
            <div class="card-image"></div>
            <p class="card-publication-date"><i class="far fa-clock"></i> 15th of September 2020</p>
            <h3 class="card-title">Article Title Here</h3>
            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi blanditiis tenetur atque.</p>
            <div class="card-more-info">
                <div class="card-more-info-line">...</div>
                <a class="card-more-info-button">More Info</a>
            </div>
        </div>
        <div class="archive-card">
            <div class="card-image"></div>
            <p class="card-publication-date"><i class="far fa-clock"></i> 15th of September 2020</p>
            <h3 class="card-title">Article Title Here</h3>
            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi blanditiis tenetur atque.</p>
            <div class="card-more-info">
                <div class="card-more-info-line">...</div>
                <a class="card-more-info-button">More Info</a>
            </div>
        </div>
    </div>
</section> -->
<!-- <section class="values">
            <div class="trio">
                <i class="far fa-laugh-wink trio-item trio-item-icon"></i>
                <p class="trio-item trio-item-value">Value Here</p>
                <p class="trio-item trio-item-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit voluptatum libero debitis id excepturi? Quasi quis aspernatur dignissimos hic.</p>
            </div>
            <div class="trio">
                <i class="far fa-laugh-wink trio-item trio-item-icon"></i>
                <p class="trio-item trio-item-value">Value Here</p>
                <p class="trio-item trio-item-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit voluptatum libero debitis id excepturi? Quasi quis aspernatur dignissimos hic.</p>
            </div>
            <div class="trio">
                <i class="far fa-laugh-wink trio-item trio-item-icon"></i>
                <p class="trio-item trio-item-value">Value Here</p>
                <p class="trio-item trio-item-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit voluptatum libero debitis id excepturi? Quasi quis aspernatur dignissimos hic.</p>
            </div>
        </section> -->
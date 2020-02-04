<?php get_header(); ?>
<!-- container -->

<main class="main">
    <div class="container">
        <div class="main__content">
            <h1 class="main__title"><?= get_field('main_title'); ?></h1>
            <?= get_field('description'); ?>
            <div class="circles circles--main" aria-hidden="true">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

    <a href="#page-content" class="main__image-wrapper">
        <img src="<?= the_field('main_image'); ?>" alt="">
    </a>

</main>

<section class="page-content" id="page-content">
    <div class="container">
        <!-- site-content -->
        <div class="site-content">
            <?php
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
                    get_template_part('content', 'page');
                endwhile;
            else :
                get_template_part('content', 'none');
            endif;
            ?>
        </div>
        <!-- /site-content -->
    </div>
</section>
<!-- /container -->
<?php get_footer(); ?>

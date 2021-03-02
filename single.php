<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <?php get_header(); ?>
    </head>

    <body <?php body_class(); ?> id="page-top">

        <!-- Navigation-->
        <?php get_template_part('includes/header'); ?>

        <?php if (have_posts()): ?>
        <?php while (have_posts()) : the_post(); ?>

        <!-- Page Header -->
        <?php
            $eyecatch = get_eyecatch_with_default();
        ?>

        <!-- Masthead-->
        <header class="masthead-single" style="background-image: url('<?php echo $eyecatch[0]; ?>')">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end">
                        <h1 class="text-uppercase text-white font-weight-bold"><?php the_title(); ?></h1>
                        <hr class="divider my-4" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 font-weight-light mb-5">Posted by <?php the_author(); ?><br /> on <?php the_time('Y年m月d日'); ?></p>
                    </div>
                </div>
            </div>
        </header>

        <!-- Post Content -->
        <article class="page-article">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <?php the_post_thumbnail([300, 300], ['alt'=>'アイキャッチ画像']); ?>
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </article>

        <?php endwhile; ?>
        <?php endif; ?>

        <!-- Footer-->
        <?php get_template_part('includes/footer'); ?>

        <?php get_footer(); ?>
    </body>
</html>

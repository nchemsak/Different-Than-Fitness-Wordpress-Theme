<?php get_header(); ?>
<section id="index">
    <div class="container">
        <div class="background">
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
            
        </div>
        <div class="transparent-spacer"></div>
    </div>
</section>
<?php get_footer(); ?>
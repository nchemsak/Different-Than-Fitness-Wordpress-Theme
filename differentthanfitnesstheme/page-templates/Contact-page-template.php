<?php /* Template Name: Contact Page Template */ ?>
<?php get_header(); ?>



<body id="body" class="content-body scrollAdjust">
    <div class="container">
        <div id="about-me">
            <div class="background">
            </div>
            <div class="inner-page-wrapper">
                <h1>Contact me.</h1>
                <div class="row">
                    <div class="col-xs-12">
                        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                        <?php the_content(); ?>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="transparent-spacer"></div>
        </div>
    </div>



            <?php get_footer(); ?>
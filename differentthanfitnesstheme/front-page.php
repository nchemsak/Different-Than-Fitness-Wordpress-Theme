<?php get_header(); ?>
<section id="content-page-template" class="content-body scrollAdjust">
    <div class="container">
        <div id="about-me">
            <div class="background"> 
            </div>


            <section id="tiles">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <a href="<?php the_field('tile_1_link'); ?>">
                            <div class="row no-gutters">
                                <div class="col-xs-4 col-sm-12 services-frame animated fadeInLeft">
                                    <?php $image1 = get_field('tile_1_photo'); ?>
                                    <div class="card-img pic-one" alt="<?php echo $image1['alt']; ?>" style="background-image: url(<?php echo $image1['url']; ?>)"></div>
                                </div>
                                <div class="col-xs-8 col-sm-12 caption animated fadeInUp">
                                    <?php the_field('tile_1_text'); ?>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <a href="<?php the_field('tile_2_link'); ?>">
                            <div class="row no-gutters">
                                <div class="col-xs-4 col-sm-12 services-frame animated fadeInDown">
                                    <?php $image2 = get_field('tile_2_photo'); ?>
                                    <div class="card-img pic-one" alt="<?php echo $image2['alt']; ?>" style="background-image: url(<?php echo $image2['url']; ?>)"></div>
                                </div>
                                <div class="col-xs-8 col-sm-12 caption animated fadeInUp">
                                    <?php the_field('tile_2_text'); ?>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <a href="<?php the_field('tile_3_link'); ?>">
                            <div class="row no-gutters">
                                <div class="col-xs-4 col-sm-12 services-frame animated fadeInRight">
                                    <?php $image3 = get_field('tile_3_photo'); ?>
                                    <div class="card-img pic-one" alt="<?php echo $image3['alt']; ?>" style="background-image: url(<?php echo $image3['url']; ?>)"></div>
                                </div>
                                <div class="col-xs-8 col-sm-12 caption animated fadeInUp">
                                    <?php the_field('tile_3_text'); ?>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <a href="<?php the_field('tile_4_link'); ?>">
                            <div class="row no-gutters">
                                <div class="col-xs-4 col-sm-12 services-frame animated fadeInRight">
                                    <?php $image4 = get_field('tile_4_photo'); ?>
                                    <div class="card-img pic-one" alt="<?php echo $image4['alt']; ?>" style="background-image: url(<?php echo $image4['url']; ?>)"></div>
                                </div>
                                <div class="col-xs-8 col-sm-12 caption animated fadeInUp">
                                    <?php the_field('tile_4_text'); ?> </div>
                            </div>
                        </a>
                    </div>
                </div>
            </section>
            <!-- <hr /> -->
            <div class="transparent-spacer"></div>
        </div>
    </div>
</section>

 <?php get_footer(); ?>  

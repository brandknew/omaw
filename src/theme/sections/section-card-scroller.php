<?php
$section_id = isset($args['data']['id']) ? $args['data']['id'] : 'our-story-'.rand();
$display = isset($args['data']['display']) ? $args['data']['display'] : true;
$heading = isset($args['data']['heading']) ? $args['data']['heading'] : true;

$card_heading = isset($args['data']['card_heading']) ? $args['data']['card_heading'] : true;
$card_content = isset($args['data']['card_content']) ? $args['data']['card_content'] : true;

if( $display):?>

<section class="card-scroller">
    <div class="card-scroller__inner layout--1080">
        <div class="card-scroller__col">
            <?php
                echo $heading ? '<h2 class="card-scroller__heading" data-aos="smooth-slide-up" data-aos-delay="250" data-aos-duration="450" data-aos-easing="cubic">'. $heading .'</h2>' : '';
            ?>
        </div>
        <div class="card-scroller__col">
            <div class="card-scroller__cards desktop">
                <?php
                if( have_rows('about__scrolling-cards__cards') ):
                    while( have_rows('about__scrolling-cards__cards') ) : the_row();

                        $heading = get_sub_field('scroller__heading');
                        $copy = get_sub_field('scroller__content');

                        echo get_template_part('snippets/scroller-card-single',null,
                        array(
                            'class' => '',
                            'data' => array(
                                'heading' => $heading,
                                'copy' => $copy
                            )
                        ));

                    endwhile;
                endif;
                ?>
            </div>
            <div class="card-scroller__cards swiper scroll-cards mobile">
                <div class="swiper-wrapper">
                <?php
                    if( have_rows('about__scrolling-cards__cards') ):
                        while( have_rows('about__scrolling-cards__cards') ) : the_row();

                            $heading = get_sub_field('scroller__heading');
                            $copy = get_sub_field('scroller__content');

                            echo get_template_part('snippets/scroller-card-single',null,
                            array(
                                'class' => '',
                                'data' => array(
                                    'heading' => $heading,
                                    'copy' => $copy
                                )
                            ));

                        endwhile;
                    endif;
                ?>
                </div>
            </div>
        
        </div>
    </div>
</section>
<?php 
endif; ?>
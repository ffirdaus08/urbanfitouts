<?php
/**
 * Slider template
 *
 * @package Sydney
 */

//Slider template
if ( ! function_exists( 'sydney_slider_template' ) ) :
function sydney_slider_template() {

    if ( (get_theme_mod('front_header_type','slider') == 'slider' && is_front_page()) || (get_theme_mod('site_header_type') == 'slider' && !is_front_page()) ) {

    //Get the slider options
    $text_slide = get_theme_mod('textslider_slide', 0);
    $button     = sydney_slider_button();
    $mobile_slider = get_theme_mod('mobile_slider', 'responsive');

    //Slider text
    if ( !function_exists('pll_register_string') ) {
    	$titles = array(
    		'slider_title_1' => get_theme_mod('slider_title_1', 'Welcome to Sydney'),
    		'slider_title_2' => get_theme_mod('slider_title_2'),
    		'slider_title_3' => get_theme_mod('slider_title_3'),
    		'slider_title_4' => get_theme_mod('slider_title_4'),
    		'slider_title_5' => get_theme_mod('slider_title_5'),
    	);
    	$subtitles = array(
    		'slider_subtitle_1' => get_theme_mod('slider_subtitle_1', 'Feel free to look around'),
    		'slider_subtitle_2' => get_theme_mod('slider_subtitle_2'),
    		'slider_subtitle_3' => get_theme_mod('slider_subtitle_3'),
    		'slider_subtitle_4' => get_theme_mod('slider_subtitle_4'),
    		'slider_subtitle_5' => get_theme_mod('slider_subtitle_5'),    		
    	);
    } else {
    	$titles = array(
    		'slider_title_1' => pll__( get_theme_mod('slider_title_1', 'Click the pencil icon to change this text') ),
    		'slider_title_2' => pll__( get_theme_mod('slider_title_2') ),
    		'slider_title_3' => pll__( get_theme_mod('slider_title_3') ),
    		'slider_title_4' => pll__( get_theme_mod('slider_title_4') ),
    		'slider_title_5' => pll__( get_theme_mod('slider_title_5') ),
    	);
    	$subtitles = array(
    		'slider_subtitle_1' => pll__( get_theme_mod('slider_subtitle_1', 'or go to the Customizer') ),
    		'slider_subtitle_2' => pll__( get_theme_mod('slider_subtitle_2') ),
    		'slider_subtitle_3' => pll__( get_theme_mod('slider_subtitle_3') ),
    		'slider_subtitle_4' => pll__( get_theme_mod('slider_subtitle_4') ),
    		'slider_subtitle_5' => pll__( get_theme_mod('slider_subtitle_5') ),
    	);
    }
    $images = array(
    		'slider_image_1' => get_theme_mod('slider_image_1'),
    		'slider_image_2' => get_theme_mod('slider_image_2'),
    		'slider_image_3' => get_theme_mod('slider_image_3'),
    		'slider_image_4' => get_theme_mod('slider_image_4'),
    		'slider_image_5' => get_theme_mod('slider_image_5'),
    );


    if ( $images['slider_image_1'] == '' ) {
        return;
    }

    //If the second slide is empty, stop the slider
    if ( $images['slider_image_2'] != '' ) {
        $speed = get_theme_mod('slider_speed', '4000');
    } else {
        $speed = 0;
    }
    ?>

    <div id="slideshow" class="header-slider" data-speed="<?php echo esc_attr($speed); ?>" data-mobileslider="<?php echo esc_attr($mobile_slider); ?>">
        <div class="slides-container">

        <?php $c = 1; ?>
        <?php foreach ( $images as $image ) {
        	if ( $image ) {

                $image_alt = sydney_get_image_alt( $image );
        		?>
                <div class="slide-item slide-item-<?php echo $c; ?>" style="background-image:url('<?php echo esc_url( $image ); ?>');">
                    <img class="mobile-slide preserve" src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( $image_alt ); ?>"/>
                    <div class="slide-inner">
                        <div class="contain animated fadeInRightBig text-slider">
                        <h2 class="maintitle"><?php echo wp_kses_post( $titles['slider_title_' . $c] ); ?></h2>
                        <p class="subtitle"><?php echo esc_html( $subtitles['slider_subtitle_' . $c] ); ?></p>
                        </div>
                        <?php echo $button; ?>
                    </div>
                </div>
                <?php
        	}
        	$c++;
        }
        ?>

        </div>  
        <?php if ( $text_slide ) : ?>
            <?php echo sydney_stop_text(); ?>
        <?php endif; ?>
    </div>

    <?php
    }
}
endif;

function sydney_slider_button() {

    if ( !function_exists('pll_register_string') ) {
        $slider_button      = get_theme_mod('slider_button_text', 'Click to begin');
        $slider_button_url  = get_theme_mod('slider_button_url','#');        
    } else {
        $slider_button      = pll__(get_theme_mod('slider_button_text', 'Click to begin'));
        $slider_button_url  = pll__(get_theme_mod('slider_button_url','#'));
    }

    if ($slider_button) {
        return '<a class="roll-button button-slider">' . '<h5 class="title-h">welcome to <br>work nation</h5>' 
        .'<p class="text-header">Our boutique co-working space
        located at 20 Poplar Street,
        Surry Hills, NSW, is now open</p>
        <p class="text-header">Available in single, double, or
        triple or any combination!</p>
        <p class="b">** 1-week free trial available **</p>'. '</a>';
    }

}

function sydney_stop_text() {

    if ( !function_exists('pll_register_string') ) {
        $slider_title_1     = get_theme_mod('slider_title_1', 'Welcome to Sydney');
        $slider_subtitle_1  = get_theme_mod('slider_subtitle_1','Feel free to look around');
    } else {
        $slider_title_1     = pll__(get_theme_mod('slider_title_1', 'Welcome to Sydney'));
        $slider_subtitle_1  = pll__(get_theme_mod('slider_subtitle_1','Feel free to look around')); 
    }

    ?>    
    <div class="slide-inner text-slider-stopped">
        <div class="contain text-slider">
            <h2 class="maintitle"><?php echo esc_html($slider_title_1); ?></h2>
            <p class="subtitle"><?php echo esc_html($slider_subtitle_1); ?></p>        </div>
        <?php echo sydney_slider_button(); ?>
    </div>   
    <?php 
}
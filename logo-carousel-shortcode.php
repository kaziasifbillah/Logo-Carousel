<?php
function asif_logo_carousel_shortcode($atts, $content = null) {
    extract( shortcode_atts( array(
        'logos' => '',
        'desktop_count' => '5',
        'tablet_count' => '3',
        'mobile_count' => '2',
        'loop' => 'true',
        'autoplay' => 'true',
        'autoplaytimeout' => '5000',
        'nav' => 'false',
        'dots' => 'true',
    ), $atts) );
	
	
    $logo_ids = explode(',', $logos);
	
	
    $asif_logo_carousel_markup = '
    <script>
        jQuery(document).ready(function($){
            $(".asif-logo-carousel").owlCarousel({
 				margin: 30,
                items: 5,
                loop: '.$loop.',
                autoplay: '.$autoplay.',
                autoplaytimeout: '.$autoplaytimeout.',
                nav: '.$nav.',
                dots: '.$dots.',
                navText: ["<i class=\'fa fa-angle-left\'></i>", "<i class=\'fa fa-angle-right\'></i>"]                
            });
        });
    </script>    
    ';
    $asif_logo_carousel_markup .= '
    <div class="asif-logo-carousel">';
        foreach($logo_ids as $logo) {
            $logo_array = wp_get_attachment_image_src($logo, 'large');
            $asif_logo_carousel_markup .= '
            <div class="asif-logo-item-table">
                <div class="asif-logo-item-tablecell">
                    <img src="'.$logo_array[0].'" alt=""/>
                </div>
            </div>
            ';
        }
    $asif_logo_carousel_markup .= ' 
    </div>
    ';
    return $asif_logo_carousel_markup;
}
add_shortcode('asif_logo_carousel', 'asif_logo_carousel_shortcode');

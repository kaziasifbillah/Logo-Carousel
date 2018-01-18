<?php


vc_map( array(
      "name" => __( "Asif Logo Carousel", "my-text-domain" ),
      "base" => "asif_logo_carousel",
      "category" => __( "Asif", "my-text-domain"),
      "params" => array(
         array(
            "type" => "attach_images",
            "heading" => __( "Uplode Logos", "my-text-domain" ),
            "param_name" => "logos",
            "description" => __( "", "my-text-domain" )
         ),
			 
		 array( 
				"type" => "textfield", 
				"heading" => __( "Desktop Count", "my-text-domain" ), 
				"param_name" => "desktop_count", 
				"std" => __( "5", "my-text-domain" ),
            	"description" => __( "", "my-text-domain" ),
         ),
			 
		 array( 
				"type" => "textfield", 
				"heading" => __( "Tablet Count", "my-text-domain" ), 
				"param_name" => "tablet_count", 
				"std" => __( "3", "my-text-domain" ),
            	"description" => __( "", "my-text-domain" ),
         ),
			 
		 array( 
				"type" => "textfield", 
				"heading" => __( "Mobile Count", "my-text-domain" ), 
				"param_name" => "mobile_count", 
				"std" => __( "2", "my-text-domain" ),
            	"description" => __( "", "my-text-domain" ),
         ),
			 
		 array( 
				"type" => "dropdown", 
				"heading" => __( "Enable loop?", "my-text-domain" ), 
				"param_name" => "loop", 
				"std" => __( "true", "my-text-domain" ), 
				"value" => array ( 
				'yes' => 'true',
				'no' => 'false'
				),
            	"description" => __( "", "my-text-domain" ),
         ),
         array(
            "type" => "dropdown",
            "heading" => __( "Enable autoplay?", "my-text-domain" ),
            "param_name" => "autoplay",
            "std" => __( "true", "my-text-domain" ),
            "value" => array (
                'yes' => 'true',
                'no' => 'false'
            ),
            "description" => __( "", "my-text-domain" ),
         ),
         array(
            "type" => "dropdown",
            "heading" => __( "Logo Carousel Time", "my-text-domain" ),
            "param_name" => "autoplaytimeout",
            "std" => __( "5000", "my-text-domain" ),
            "value" => array (
                '1 Second' => '1000',
                '2 Seconds' => '2000',
                '3 Seconds' => '3000',
                '4 Seconds' => '4000',
                '5 Seconds' => '5000',
                '6 Seconds' => '6000',
                '7 Seconds' => '7000',
                '8 Seconds' => '8000',
                '9 Seconds' => '9000',
                '10 Seconds' => '10000'
            ),
            "description" => __( "", "my-text-domain" ),
			 "dependency" => array (
                'element' => "autoplay",
                'value' => array("true"),
            )
         ),
         array(
            "type" => "dropdown",
            "heading" => __( "Enable navigation?", "my-text-domain" ),
            "param_name" => "nav",
            "std" => __( "true", "my-text-domain" ),
            "value" => array (
                'yes' => 'true',
                'no' => 'false'
            ),
            "description" => __( "", "my-text-domain" ),
         ),
         array(
            "type" => "dropdown",
            "heading" => __( "Enable dots?", "my-text-domain" ),
            "param_name" => "dots",
            "std" => __( "true", "my-text-domain" ),
            "value" => array (
                'yes' => 'true',
                'no' => 'false'
            ),
            "description" => __( "", "my-text-domain" ),
         )
      )
   ) );

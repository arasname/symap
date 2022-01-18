<?php
include( plugin_dir_path( __FILE__ ) . '/map-data.php');

function getArrayValues(){
    return array(
        array(

                'lat' => '36.53826838820746', 
                'long' => '37.38139158520327',
                'type' =>  "webpage",
                'dateStart' =>  '2012-01-01',
                'dateEnd' =>  '2014-01-01',
                'title' => 'ArtaFM',
                'shortDesc'=> 'saf asdf asdf asd fasdf ',
                'url'=>  ''
        ),
        array(

                'lat' => '36.105901494312', 
                'long' => '40.02913141903258',
                'type' =>  "tv",
                'dateStart' =>  '2013-01-01',
                'dateEnd' =>  '2019-01-01'
            ),

        array(

                'lat' => '36.65019403182274', 
                'long' => '39.977725107263694',
                'type' =>  "radio",
                'dateStart' =>  '2014-01-01',
                'dateEnd' =>  '2020-01-01'
            ),

        array(

                'lat' => '36.221616984023385', 'long' => '38.390649275863794',
                'type' =>  "newspaper",
                'dateStart' =>  '2015-01-01',
                'dateEnd' =>  '2017-01-01'
            ),

        array(

                'lat' => '36.47420341068751', 
                'long' => '40.47469372868596',
                'type' =>  "radio",
                'dateStart' =>  '2016-01-01',
                'dateEnd' =>  '2018-01-01'
            ),

        array(

                'lat' => '35.457509533954386', 
                'long' => '39.15579187763656',
                'type' =>  "radio",
                'dateStart' =>  '2017-01-01',
                'dateEnd' =>  '2019-01-01'
            ),

        );
}


function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

add_action('wp_enqueue_scripts','Load_Template_Scripts_mapScript');
function Load_Template_Scripts_mapScript(){
    if ( is_page_template('map_page.php') ) {
        wp_enqueue_script('symap-map-script', get_stylesheet_directory_uri().'/js/map.js');
        wp_localize_script( 'symap-map-script', 'arasvars', getArrayValues() );
    }
}
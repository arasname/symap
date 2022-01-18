<?php

function myPrint($var){
    getMapData();
    echo "<br><br>".$var."--------------------->";
    
}
function custom_dump($anything){
    add_action('shutdown', function () use ($anything) {
      echo "<div style='position: absolute; z-index: 100; left: 30px; bottom: 30px; right: 30px; background-color: white;'>";
      var_dump($anything);
      echo "</div>";
    });
  }

function getMapData(){
    $args = array( 
        'post_type'   => 'cool_timeline',
         'post_status'=>array('publish','future'),
         'numberposts' => -1 );
       $posts = get_posts( $args );

       custom_dump($posts);
}
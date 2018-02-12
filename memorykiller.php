<?php
/**
 * @package memorykiller
 * @version 1.0
 */
/*
Plugin Name: memorykiller
Plugin URI: https://github.com/jordiprats/wordpress-memorykiller
Description: CPU killer for demo purposes
Author: Jordi Prats
Version: 1.0
Author URI: http://systemadmin.es
*/

add_filter('the_content', 'memorykiller_content', 1);

function memorykiller_content($content)
{

  $stack = array("Monkeys");
  
  for($i=0; $i<rand(9999,99999); $i++)
  {
    for($j=0; $j<rand(9999,99999); $j++)
    {
      for($x=0; $x<rand(9999,99999); $x++)
      {
        for($y=0; $y<rand(9999,99999); $y++)
        {
          $file = file_get_contents(plugin_dir_path( __FILE__ ).'/random.string', FILE_USE_INCLUDE_PATH);  
          array_push($stack, $file);
        }
      }
    }
  }


  return $content."<h3><center><strong>".implode(",", $stack)."</strong></center></h3><p><center>memory killer=true</center></p>";
}

?>

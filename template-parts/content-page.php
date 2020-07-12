<div class="container">

  <div class="content">
  <h1 class="single-page-title"><?php the_title();?></h1>
  <?php
the_content(); 
?>
<?php
  function my_content($content) {
    $page = get_page_by_title( 'Sample Page' );
    if ( is_page($page->ID) )
        $content = "Hello World!";
    return $content;
}
add_filter('the_content', 'my_content');
?>


</div>


</div>
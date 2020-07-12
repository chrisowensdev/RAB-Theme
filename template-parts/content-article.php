<div class="container single-page-content">
	<header class="content-header">
    <div class="single-post-title"><?php the_title();?></div>
    <div class="main-image"><img src="<?php the_post_thumbnail_url('full');?>" /></div>
    <div class="meta mb-3">
      <span class="date"><?php the_date();?></span>
      <?php
        the_tags('<span class="tag"><i class="fa fa-tag"></i>', '</span><span class="tag"><i class="fa fa-tag"></i>', '</span>');
      ?>
      
      <span class="tag"><i class="fa fa-tag"></i> category</span>
      <span class="comment"><a href="#comments"><i class='fa fa-comment'></i> <?php comments_number(); ?>;</a></span>
    </div>
    </header>
    
    
  <?php
the_content();
?>

<?php
comments_template();
?>

</div>
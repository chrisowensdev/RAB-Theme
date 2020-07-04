<?php
get_header();
?>
    <div class="container">
    <div class="row">
        <div class="col-lg-9">
        <article class="content">

<?php
    if( have_posts() ){

        while( have_posts() ) {

            the_post();
    
    get_template_part('template-parts/content', 'article');
        }

    }
?>

    </article>
        </div>
        <div class="col-lg-3 main-sidebar-right msr-hide">
<?php dynamic_sidebar('sidebar-1');
					?>
</div>
    
    </div>
    </div>
    
		

    
<?php 
get_footer();
?>
<?php
get_header();
?>
		
<div class="container">
	<div class="row">
		<div class="col-xl-9 col-lg-9 main-screen">
            <div class="single-page-content">
            <?php
		if( have_posts() ){

			while( have_posts() ) {

				the_post();
        
        get_template_part('template-parts/content', 'page');
			}

		}
	?>

            </div>
	
        </div>

        <div class="col-lg-3 main-sidebar-right">
            <?php dynamic_sidebar('sidebar-1');?>
        </div>
    </div>
</div>


		
<?php 
get_footer();
?>
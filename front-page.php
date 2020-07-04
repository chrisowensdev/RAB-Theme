<?php
get_header();
?>
		
<div class="container">
	<div class="row">
		<div class="col-lg-9 main-screen">
			<div class="content">

				<?php
					$recent_posts = wp_get_recent_posts(array(
						'numberposts' => 1, // Number of recent posts thumbnails to display
						'post_status' => 'publish' // Show only the published posts
					));
					foreach($recent_posts as $post) : ?>
				
					<div class="latest-post">
						<h5>Latest Post</h5>
							<a href="<?php echo get_permalink($post['ID']) ?>">
								<div class="latest-post-image">
									
									<?php echo get_the_post_thumbnail($post['ID'], 'full'); ?>
								
								</div>

								<h3 class="post-title">
									
									<?php echo $post['post_title'] ?>
								
								</h3>
							</a>
					</div>
				<?php endforeach; wp_reset_query(); ?>

	<div class="row">
		<div class="col-lg-4 category-post">

		<?php $category_link = get_category_link( 2 );?>
			<a class="cat-link" href="<?php echo $category_link;?>">
			
				<div class="cat-title">Player Stories</div>
			</a>
				
				<?php 
				$recent_player_posts = wp_get_recent_posts(array(
					'numberposts' => 1,
					'category' => 2,
					'post_status' => 'publish'
				));
				
				foreach($recent_player_posts as $post): 
				?>
				
			<a href="<?php echo get_permalink($post['ID']) ?>">
			<div class="category-content">
			<div class="cat-link-image">
				<?php echo get_the_post_thumbnail($post['ID'], 'thumbnail'); ?>
			</div>
					<div class="cat-post-title-area">
					<h6 class="cat-post-title"><?php echo $post['post_title'] ?></h6>
					</div>
			</div>
			
				
							</a>
					
						<?php endforeach; wp_reset_query(); ?>
				</div>
				<div class="col-lg-4 category-post">

				<?php $category_link = get_category_link( 5 );?>
			<a class="cat-link" href="<?php echo $category_link;?>">
<div class="cat-title">Hall Of Fame</div></a>
<?php $recent_player_posts = wp_get_recent_posts(array(
		'numberposts' => 1,
		'category' => 5,
		'post_status' => 'publish'
	));
	foreach($recent_player_posts as $post): ?>

	<a href="<?php echo get_permalink($post['ID']) ?>">
	<div class="category-content">
			<div class="cat-link-image">
				<?php echo get_the_post_thumbnail($post['ID'], 'thumbnail'); ?>
			</div>
					<div class="cat-post-title-area">
					<h6 class="cat-post-title"><?php echo $post['post_title'] ?></h6>
					</div>
			</div>
	</a>

<?php endforeach; wp_reset_query(); ?>
</div>

<div class="col-lg-4 category-post">

<?php $category_link = get_category_link( 4 );?>
			<a class="cat-link" href="<?php echo $category_link;?>">
<div class="cat-title">World Series</div></a>
<?php $recent_player_posts = wp_get_recent_posts(array(
		'numberposts' => 1,
		'category' => 4,
		'post_status' => 'publish'
	));
	foreach($recent_player_posts as $post): ?>

	<a href="<?php echo get_permalink($post['ID']) ?>">
	<div class="category-content">
			<div class="cat-link-image">
				<?php echo get_the_post_thumbnail($post['ID'], 'thumbnail'); ?>
			</div>
					<div class="cat-post-title-area">
					<h6 class="cat-post-title"><?php echo $post['post_title'] ?></h6>
					</div>
			</div>
	</a>

<?php endforeach; wp_reset_query(); ?>
</div>

	</div>	
			</div>
		</div>
<div class="col-lg-3 main-sidebar-right">
<?php dynamic_sidebar('sidebar-1');
					?>
</div>

</div>

</div>



			</article>

		
<?php 
get_footer();
?>
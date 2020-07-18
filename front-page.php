<?php
get_header();
?>
		
<div class="container">
	<div class="row">
		<div class="col-lg-9 main-screen">
			<div class="content">				
				<div class="latest-post" >
					<h5>Latest Post</h5>
					<?php
						$recent_posts = wp_get_recent_posts(array(
							'numberposts' => 1, // Number of recent posts thumbnails to display
							'post_status' => 'publish' // Show only the published posts
						));
						foreach($recent_posts as $post) : 
						$post_image_url = get_the_post_thumbnail_url($post['ID'], 'medium_large');
						$author_id = get_post_field( 'post_author', $post_id );
						$author_first_name = get_the_author_meta('first_name', $author_id);
						$author_last_name = get_the_author_meta('last_name', $author_id);

						
					?>
						
							<div class="row latest-content">
							<div class="latest-post-image col-lg-4" style='background-image: url("<?php echo $post_image_url;?>")'>
							
							</div>
							<div class="col-lg-8 main-post-body">
							<a href="<?php echo get_permalink($post['ID']) ?>">
							<h3 class="post-title">
																
									<?php echo $post['post_title'] ?>
									
								</h3>
								</a>	

								<h6 class="main-post-sub_heading">
									<div class="main-post-date"><?php echo get_the_date('', $post['ID']);?></div> 
									<div class="main-post-author">By: <?php echo $author_first_name . ' ' . $author_last_name;?></div>
								</h6>

								<?php echo get_the_excerpt($post['ID']);
								?>
								<a href="<?php echo get_permalink($post['ID']) ?>">
								Read More...
						</a>
							</div>
							</div>
							
						
						<?php endforeach; wp_reset_query(); ?>
				</div>
				

	<div class="row">
		<div class="col-lg-4 category-post">
		<?php 
   			$idObj = get_category_by_slug('player-stories'); 
   			$id = $idObj->term_id;
		?>
			<?php $category_link = get_category_link( $id );?>
			<a class="cat-link" href="<?php echo $category_link;?>">			
				<div class="cat-title">Player Stories</div>
			</a>
				
				<?php 
				$recent_player_posts = wp_get_recent_posts(array(
					'numberposts' => 1,
					'category' => $id,
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
		<?php 
   			$idObj = get_category_by_slug('hall-of-fame'); 
   			$id = $idObj->term_id;
		?>
			<?php $category_link = get_category_link( $id );?>
			<a class="cat-link" href="<?php echo $category_link;?>">
				<div class="cat-title">Hall Of Fame</div>
			</a>

				<?php $recent_player_posts = wp_get_recent_posts(array(
					'numberposts' => 1,
					'category' => $id,
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
		<?php 
   			$idObj = get_category_by_slug('world-series'); 
   			$id = $idObj->term_id;
		?>
			<?php $category_link = get_category_link( $id );?>
			<a class="cat-link" href="<?php echo $category_link;?>">
				<div class="cat-title">World Series</div>
			</a>

				<?php $recent_player_posts = wp_get_recent_posts(array(
					'numberposts' => 1,
					'category' => $id,
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

	</div>	
	</div>
	<div class="row">
		<div class="col-lg-4 category-post">
		<?php 
   			$idObj = get_category_by_slug('countdowns-and-lists'); 
   			$id = $idObj->term_id;
		?>
			<?php $category_link = get_category_link( $id );?>
			<a class="cat-link" href="<?php echo $category_link;?>">			
				<div class="cat-title">Countdowns and Lists</div>
			</a>
				
				<?php 
				$recent_player_posts = wp_get_recent_posts(array(
					'numberposts' => 1,
					'category' => $id,
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
		<?php 
   			$idObj = get_category_by_slug('editorial'); 
   			$id = $idObj->term_id;
		?>
			<?php $category_link = get_category_link( $id );?>
			<a class="cat-link" href="<?php echo $category_link;?>">
				<div class="cat-title">Editorial</div>
			</a>

				<?php $recent_player_posts = wp_get_recent_posts(array(
					'numberposts' => 1,
					'category' => $id,
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
		<?php 
   			$idObj = get_category_by_slug('book-review'); 
   			$id = $idObj->term_id;
		?>
			<?php $category_link = get_category_link( $id );?>
			<a class="cat-link" href="<?php echo $category_link;?>">
				<div class="cat-title">Book Review</div>
			</a>

				<?php $recent_player_posts = wp_get_recent_posts(array(
					'numberposts' => 1,
					'category' => $id,
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

		
	</div>
	<div class="row">
	<div class="col-lg-6 sub-section">
		<?php $post_image_url = get_the_post_thumbnail_url(16, 'medium');?>
		<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Advanced Stats 101' ) ) ); ?>">
			<div class="sub-section_IHR">
				<div class="sub-section-IHR-image">
					<img src="<?php echo $post_image_url;?>"/>
				</div>
				<div class="sub-section-IHR-content">
					<h3 class="sub-section-title">Advanced Stats</h3>
					<p>Baseball is a numbers game. This isn’t news to anyone who follows the game regularly, but for those who just want to better understand and enjoy it, the sheer math can be daunting. As more and more technology begins to find its way into how we think about the game, and how we evaluate its brightest stars, we look to advanced metrics to help us parse out a players performance to ask a simple question: Is he REALLY that good?</p>
				</div>
			</div>
		</a>		
	</div>
	<div class="col-lg-6 sub-section">
		<?php $post_image_url = get_the_post_thumbnail_url(18, 'medium');?>
		<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'International Home Run Database' ) ) ); ?>">
			<div class="sub-section_IHR">
				<div class="sub-section-IHR-image">
					<img src="<?php echo $post_image_url;?>"/>
				</div>
				<div class="sub-section-IHR-content">
					<h3 class="sub-section-title">International Home Run Database</h3>
					<p>No matter where you live, no matter where you play, a Home Run means the same thing. It’s the ultimate show of offensive force, the perfect merger of power, speed, and skill that can only be harnessed by so few who play the game. Even though baseball is the invention of America, so many around the world know the feeling when the ball vanishes over the outfield fence, and they begin their traditional stroll around the bases.</p>
				</div>
			</div>
		</a>		
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
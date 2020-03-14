			<!-- /.news__block -->
			<div class="news__block">
				<div class="container">
					<div class="news-block__container">
						<div class="image__block">
						<? 

						 $posts = get_posts( array(
			                'numberposts' => 13,
			                'orderby'     => 'date',
			                'order'       => 'DESC',
			                'include'     => array(),
			                'exclude'     => array(),
			                'meta_key'    => '',
			                'meta_value'  => '',
			                'post_type'   => 'post',
			                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
			            ) );

					 	foreach( $posts as $post ){
							setup_postdata($post); 
									?>
							<div class="image__column">
								<img src="<? the_post_thumbnail_url(); ?>" alt="">

								<div class="image__content">
									<a href="<? the_permalink(); ?>" class="news__link">
										<span class="news-link__content">
											<span class="news__text"><? the_title(); ?></span>
											<span class="news__btn"><? echo get_the_date('j-F-Y'); ?></span>
										</span>
									</a>
								</div>
							</div>

							<?
							}
							wp_reset_postdata();
							?>

						</div>
						<div class="news__list">
						<? 

						 $posts = get_posts( array(
			                'numberposts' => 30,
			                'orderby'     => 'date',
			                'order'       => 'DESC',
			                'include'     => array(),
			                'exclude'     => array(),
			                'meta_key'    => '',
			                'meta_value'  => '',
			                'post_type'   => 'post',
			                'offset'      => 13,
			                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
			            ) );

					 	foreach( $posts as $post ){
							setup_postdata($post); 
									?>							
							<div class="list__content">
								<div class="list-content__data"><? echo get_the_date('d.m.Y'); ?></div>
								<div class="list-content__text"><p><? the_title(); ?></p></div>
							</div>
							<?
							}
							wp_reset_postdata();
							?>
							
						</div>
					</div>
				</div>
			</div>
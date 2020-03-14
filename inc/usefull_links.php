			<!-- /.useful-links -->
			<div class="useful-links">
				<div class="container">
					<div class="useful-links__content">
						<div class="useful-content__title md__title">Полезные Ссылки</div>
						<div class="useful__box">
						<? 

						 $posts = get_posts( array(
			                'numberposts' => 13,
			                'orderby'     => 'date',
			                'order'       => 'DESC',
			                'include'     => array(),
			                'exclude'     => array(),
			                'meta_key'    => '',
			                'meta_value'  => '',
			                'post_type'   => 'userfull_links',
			                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
			            ) );

					 	foreach( $posts as $post ){
							setup_postdata($post); 
									?>

							<div class="useful__column">
								<div class="useful__item">
									<div class="item__image">
										<img src="<? the_post_thumbnail_url(); ?>" alt="">
										<div class="item__content">
											<div class="item-content__text">
												<div class="links__text"><p><? the_title(); ?></p></div>
												<div class="links__btn">
													<a href="<? echo get_field('site_link'); ?>">Подробнее</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							

							<?
							}
							wp_reset_postdata();
							?>




						</div>
					</div>
				</div>
			</div>
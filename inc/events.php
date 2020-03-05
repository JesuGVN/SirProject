			<!-- /.activity -->
			<div class="activity">
				<div class="container">
					<div class="activity__content">
						<div class="activity-content__title md__title">Мероприятия</div>
						<div class="activity__box">


                        <?php 

                        $posts = get_posts( array(
                            'numberposts' => 6,
                            'orderby'     => 'date',
                            'order'       => 'DESC',
                            'include'     => array(),
                            'exclude'     => array(),
                            'meta_key'    => '',
                            'meta_value'  =>'',
                            'post_type'   => 'events',
                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        ) );

                        foreach($posts as $post){
                            setup_postdata($post);
                        ?>
                            <div class="activity__column">
								<div class="activity__item">
									<div class="activity__image">
										<!-- <img src="img/activity/01.jpg"> -->
                                        <? the_post_thumbnail(); ?>
										<div class="activity-image__content">
											<a href="<? the_permalink(); ?>" class="activity__link">
												<span class="activity__text"><? the_title(); ?></span>
												<span class="activity__btn"><? echo get_the_date('j-F-Y');?></span>
											</a>
										</div>
									</div>
								</div>
							</div>

                        <? } ?>

						</div>
					</div>
				</div>
			</div>
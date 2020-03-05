			<!-- /.cities -->
			<div class="cities">
				<div class="container">
					<div class="cities__content">
						<div class="cities-content__title md__title">Наши Районы</div>
						<div class="slider__cities">
                        <?php 

                        $posts = get_posts( array(
                            'numberposts' => 20,
                            'orderby'     => 'date',
                            'order'       => 'DESC',
                            'include'     => array(),
                            'exclude'     => array(),
                            'meta_key'    => '',
                            'meta_value'  =>'',
                            'post_type'   => 'cities',
                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        ) );

                        foreach($posts as $post){

                            setup_postdata($post);
                            $excerpt = get_the_excerpt( $post );
                            $contentText  = mb_strimwidth( $excerpt, 0,170, '&hellip;');
                            // var_dump($post);
                            ?>
							<div class="cities__item">
								<div class="item__image">
									<img src="<? echo get_field('city_preview'); ?>" alt="">
                                    <? #the_post_thumbnail(); ?>
								</div>
								<div class="item__citi"><? the_title(); ?></div>
								<div class="text__content">
									<div class="item__text"><p><? echo $contentText; ?></p></div>
									<div class="item__btn"><a href="<? the_permalink(); ?>">Узнать больше</a></div>
								</div>
							</div>
                        <? } ?>

						</div>
					</div>
				</div>
			</div>

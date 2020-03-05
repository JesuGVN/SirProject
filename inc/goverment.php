
			<!-- /.preview -->
			<div class="preview">
				<div class="container">
					<div class="preview__content">
						<div class="preview-content__tetle md__title">Правительство</div>
						<div class="preview__box">
							<div class="preview__block">
								<div class="preview-block__image">
									<img class="gov_BigPreview" src="img/preview/01.jpg" alt="">
									<div class="preview-image__content">
										<div class="priview-image__text">
												<div class="image-content__name">Мирзиёев Шавкат Миромонович</div>
												<div class="image-content__info">Президент Республики Узбекистан</div>
												<div class="image-content__btn">
												<a class="bgp_link" href="#">Подробнее</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="preview__list">

							<?

							$posts = get_posts( array(
	                            'numberposts' => 6,
	                            'orderby'     => 'date',
	                            'order'       => 'DESC',
	                            'include'     => array(),
	                            'exclude'     => array(),
	                            'meta_key'    => '',
	                            'meta_value'  =>'',
	                            'post_type'   => 'goverment',
	                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
	                        ) );
							$i = 0;
	                        foreach($posts as $post){
                    			setup_postdata($post);

							?>
								<div class="preview-list__content" data-active="false" data-inc=<? echo $i; ?> data-id="<? the_permalink(); ?>" data-bgp="<? echo get_field('gov_preview_big'); ?>">
									<div class="list-content__image">
										<img src="<? echo get_field('gov_preview_small'); ?>" alt="">
									</div>
									<div class="list-content__text">
										<div class="list-text__name"><? the_title(); ?></div>
										<div class="list-text__info"><? echo get_field('gov_level'); ?></div>
									</div>
								</div>

							<? 
							$i++;
						} ?>

							</div>
						</div>
					</div>
				</div>
			</div>
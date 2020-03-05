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
								<!-- <img src="http://sirdaryo.uz/wp-content/uploads/2020/02/6fbe347ee16824f6e0ddd.jpg" alt=""> -->
								<? the_post_thumbnail(); ?>
								<div class="image__content">
									<a href="#" class="news__link">
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
							<div class="list__content">
								<div class="list-content__data">17.02.2020</div>
								<div class="list-content__text"><p>Халк депутатлари Боёвут тумани Кенгашининг навбатдан ташкари сессияси якунланди.</p></div>
							</div>
							<div class="list__content">
								<div class="list-content__data">17.02.2020</div>
								<div class="list-content__text"><p>Халк депутатлари Боёвут тумани Кенгашининг навбатдан ташкари сессияси якунланди.</p></div>
							</div>
							<div class="list__content">
								<div class="list-content__data">17.02.2020</div>
								<div class="list-content__text"><p>Халк депутатлари Боёвут тумани Кенгашининг навбатдан ташкари сессияси якунланди.</p></div>
							</div>
							<div class="list__content">
								<div class="list-content__data">17.02.2020</div>
								<div class="list-content__text"><p>Халк депутатлари Боёвут тумани Кенгашининг навбатдан ташкари сессияси якунланди.</p></div>
							</div>
							<div class="list__content">
								<div class="list-content__data">17.02.2020</div>
								<div class="list-content__text"><p>Халк депутатлари Боёвут тумани Кенгашининг навбатдан ташкари сессияси якунланди.</p></div>
							</div>
							<div class="list__content">
								<div class="list-content__data">17.02.2020</div>
								<div class="list-content__text"><p>Халк депутатлари Боёвут тумани Кенгашининг навбатдан ташкари сессияси якунланди.</p></div>
							</div>
							<div class="list__content">
								<div class="list-content__data">17.02.2020</div>
								<div class="list-content__text"><p>Халк депутатлари Боёвут тумани Кенгашининг навбатдан ташкари сессияси якунланди.</p></div>
							</div>
							<div class="list__content">
								<div class="list-content__data">17.02.2020</div>
								<div class="list-content__text"><p>Халк депутатлари Боёвут тумани Кенгашининг навбатдан ташкари сессияси якунланди.</p></div>
							</div>
							<div class="list__content">
								<div class="list-content__data">17.02.2020</div>
								<div class="list-content__text"><p>Халк депутатлари Боёвут тумани Кенгашининг навбатдан ташкари сессияси якунланди.</p></div>
							</div>
							<div class="list__content">
								<div class="list-content__data">17.02.2020</div>
								<div class="list-content__text"><p>Халк депутатлари Боёвут тумани Кенгашининг навбатдан ташкари сессияси якунланди.</p></div>
							</div>
							<div class="list__content">
								<div class="list-content__data">17.02.2020</div>
								<div class="list-content__text"><p>Халк депутатлари Боёвут тумани Кенгашининг навбатдан ташкари сессияси якунланди.</p></div>
							</div>
							<div class="list__content">
								<div class="list-content__data">17.02.2020</div>
								<div class="list-content__text"><p>Халк депутатлари Боёвут тумани Кенгашининг навбатдан ташкари сессияси якунланди.</p></div>
							</div>
							<div class="list__content">
								<div class="list-content__data">17.02.2020</div>
								<div class="list-content__text"><p>Халк депутатлари Боёвут тумани Кенгашининг навбатдан ташкари сессияси якунланди.</p></div>
							</div>
							<div class="list__content">
								<div class="list-content__data">17.02.2020</div>
								<div class="list-content__text"><p>Халк депутатлари Боёвут тумани Кенгашининг навбатдан ташкари сессияси якунланди.</p></div>
							</div>
							<div class="list__content">
								<div class="list-content__data">17.02.2020</div>
								<div class="list-content__text"><p>Халк депутатлари Боёвут тумани Кенгашининг навбатдан ташкари сессияси якунланди.</p></div>
							</div>
							<div class="list__content">
								<div class="list-content__data">17.02.2020</div>
								<div class="list-content__text"><p>Халк депутатлари Боёвут тумани Кенгашининг навбатдан ташкари сессияси якунланди.</p></div>
							</div>
							<div class="list__content">
								<div class="list-content__data">17.02.2020</div>
								<div class="list-content__text"><p>Халк депутатлари Боёвут тумани Кенгашининг навбатдан ташкари сессияси якунланди.</p></div>
							</div>
							<div class="list__content">
								<div class="list-content__data">17.02.2020</div>
								<div class="list-content__text"><p>Халк депутатлари Боёвут тумани Кенгашининг навбатдан ташкари сессияси якунланди.</p></div>
							</div>
							<div class="list__content">
								<div class="list-content__data">17.02.2020</div>
								<div class="list-content__text"><p>Халк депутатлари Боёвут тумани Кенгашининг навбатдан ташкари сессияси якунланди.</p></div>
							</div>
							<div class="list__content">
								<div class="list-content__data">17.02.2020</div>
								<div class="list-content__text"><p>Халк депутатлари Боёвут тумани Кенгашининг навбатдан ташкари сессияси якунланди.</p></div>
							</div>
							<div class="list__content">
								<div class="list-content__data">17.02.2020</div>
								<div class="list-content__text"><p>Халк депутатлари Боёвут тумани Кенгашининг навбатдан ташкари сессияси якунланди.</p></div>
							</div>
							<div class="list__content">
								<div class="list-content__data">17.02.2020</div>
								<div class="list-content__text"><p>Халк депутатлари Боёвут тумани Кенгашининг навбатдан ташкари сессияси якунланди.</p></div>
							</div>
							<div class="list__content">
								<div class="list-content__data">17.02.2020</div>
								<div class="list-content__text"><p>Халк депутатлари Боёвут тумани Кенгашининг навбатдан ташкари сессияси якунланди.</p></div>
							</div>
							<div class="list__content">
								<div class="list-content__data">17.02.2020</div>
								<div class="list-content__text"><p>Халк депутатлари Боёвут тумани Кенгашининг навбатдан ташкари сессияси якунланди.</p></div>
							</div>
							<div class="list__content">
								<div class="list-content__data">17.02.2020</div>
								<div class="list-content__text"><p>Халк депутатлари Боёвут тумани Кенгашининг навбатдан ташкари сессияси якунланди.</p></div>
							</div>
							<div class="list__content">
								<div class="list-content__data">17.02.2020</div>
								<div class="list-content__text"><p>Халк депутатлари Боёвут тумани Кенгашининг навбатдан ташкари сессияси якунланди.</p></div>
							</div>
							<div class="list__content">
								<div class="list-content__data">17.02.2020</div>
								<div class="list-content__text"><p>Халк депутатлари Боёвут тумани Кенгашининг навбатдан ташкари сессияси якунланди.</p></div>
							</div>
							<div class="list__content">
								<div class="list-content__data">17.02.2020</div>
								<div class="list-content__text"><p>Халк депутатлари Боёвут тумани Кенгашининг навбатдан ташкари сессияси якунланди.</p></div>
							</div>
						</div>
					</div>
				</div>
			</div>
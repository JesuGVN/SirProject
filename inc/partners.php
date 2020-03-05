			<!-- /.partners -->
			<div class="partners">
				<div class="container">
					<div class="partners__content">
						<div class="partners-content__title md__title">Наши Партнеры</div>
						<div class="partners__box">
                            <?php 

                            $posts = get_posts( array(
                                'numberposts' => 10,
                                'orderby'     => 'date',
                                'order'       => 'DESC',
                                'include'     => array(),
                                'exclude'     => array(),
                                'meta_key'    => '',
                                'meta_value'  =>'',
                                'post_type'   => 'partners',
                                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                            ) );

                            foreach($posts as $post){

                                setup_postdata($post);
                                
                                 ?>

                                <div class="partners__column">
                                    <div class="partners__item">
                                        <div class="item__image">
                                            <img src="<? echo get_field('partner_logo'); ?>" alt="">
                                        </div>
                                        <div class="item__text"><p><? the_title(); ?></p></div>
                                        <div class="item__btn">
                                            <a href="http://<? echo get_field('partner_url'); ?>"><? echo get_field('partner_url'); ?></a>
                                        </div>
                                    </div>
                                </div>

                            <? }
                            ?>
							
						</div>
					</div>
				</div>
			</div>
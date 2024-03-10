<?php

get_header();

?>

    <section>
        <div class="container">
            <div class="app">
                <div class="app__text">
                    <h1 class="app__title"><?php the_field('app_title') ?></h1>
                    <div class="app__information"><?php the_field('app_text-main') ?></div>
                </div>
                <div class="app__input-block">
                    <div class="app__input-static">
                        <div class="app__input">
                            <input type="text" class="app__input-entry" placeholder="Имя">
                        </div>
                        <div class="app__input">
                            <p><input type="tel" id="phone" class="app__input-entry" placeholder="+7 (xxx) xxx-xx-xx"></p>
                            
                        </div>
                        <div class="app__input">
                            <input type="text" name="app__company-input" class="app__input-entry" placeholder="Компания">
                        </div>
                        <div class="app__input">
                            <input type="email" id="email" name="app__email-input" class="app__input-entry" placeholder="Почта">
                            
                        </div>
                    </div>
                    <div class="app__rate-block">
                        <div class="app__select-rate">
                            <p id="app__select-rate-text" class="app__select-rate-text"><?php the_field('app_tarif-main') ?></p>
                            <div class="app__select-arrow">
                                <span class="app__select-arrow-left"></span>
                                <span class="app__select-arrow-right"></span>
                            </div>
                        </div>
                                <?php
								$app_tarif = get_field('app_tarif');	
								if( $app_tarif ): ?>
							<div class="app__subnav-rate-wrapper" style="visibility: hidden; opacity: 0;">
								<div class="app__subnav-rate">
									<div id="app__subnav-option1" class="app__subnav-option app__subnav-option1" onclick="TarifRate('app__subnav-option1')"><?php echo $app_tarif['app_tarif-lite']; ?></div>
									<div id="app__subnav-option2" class="app__subnav-option app__subnav-option2" onclick="TarifRate('app__subnav-option2')"><?php echo $app_tarif['app_tarif-midl']; ?></div>
									<div id="app__subnav-option3" class="app__subnav-option app__subnav-option3" onclick="TarifRate('app__subnav-option3')"><?php echo $app_tarif['app_tarif-hard']; ?></div>
								</div>
							</div>
								<?php endif; ?>
                    </div>
                    <div class="app__call">
                        <div class="app__input-call">
                            <textarea type="text" name="app__call-input" class="app__call-input app__input-entry" placeholder="Сообщение"></textarea>
                        </div>
                        <div class="app__call-bottom">
                            <div class="app__explanation"><?php the_field('app_exp') ?></div>
                            <div class="app__call-button">
                                <input type="file" id="file-input" class="app__upload-file">
                                <button type="file" class="app__button-upload-file" onclick="document.getElementById('file-input').click()"><?php the_field('app_input-file') ?></button>
                            </div>
                        </div>
                    </div>
                    <div class="app__bottom">
                        <div class="app--bottom__button">
                            <button type="submit" class="app__bottom-send" onclick="openThx()"><?php the_field('app_text-button') ?></button>
                        </div>
                        <div class="app__bottom-text"><?php the_field('app_text') ?> <br>
                            <a href="#" class="app__bottom-link"><?php the_field('app_text-link') ?></a>
                        </div>
                    </div>
                </div>
                <div class="app__cross"><img src="<?php the_field('app_cross') ?>" class="app__cross-img" onclick="closePopUp()"></div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="app-thx">
                <div class="app-thx__text-logo">
                    <a href="#"><img src="<?php the_field('app_thx-logo') ?>" alt="Логотип компании" class="app-thx__logo-img"></a>
                    <h1 class="app-thx__left-text"><?php the_field('app_thx-title') ?></h1>
                </div>
                <div class="app-thx__right">
                    <p class="app-thx__right-text"><?php the_field('app_thx-text') ?></p>
                    <button class="app-thx__right-btn" onclick="Send()"><?php the_field('app_thx-text-button') ?></button>
                </div>
                <div class="app-thx__cross"><img src="<?php the_field('app_thx-cross') ?>" class="app-thx__cross-img" onclick="closeThxPopUp()"></div>
            </div>
        </div>
    </section>

    <main>
        <section>
            <div class="container">
                <div class="support">
                    <?php
					$support = get_field('support');	

					if( $support ): ?>
						<div class="support__text">
							<h1 class="support__title"><?php echo $support['support_title']; ?></h1>
							<p class="support__info"><?php echo $support['support_text']; ?> <span class="support__color-text"><?php echo $subnav['support_text-color']; ?></span></p>
							<div class="support__button-wrap">
								<button class="button support__button" onclick="openPopUp()">Обсудить проект</button>
							</div>
						</div>
						<div class="support__picture">
							<img src="<?php echo $support['support_img']; ?>" alt="Поддержка" class="support__img">
						</div>
					<?php endif; ?>
				</div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="info">
                    <div class="info__block">
                        <?php
						$info = get_field('info');
						if( $info ): ?>
							<div class="info__picture">
								<img src="<?php echo $info['info_img-1']; ?>" alt="Люди" class="info__img">
							</div>
							<div class="info__text">
								<h3 class="info__title"><?php echo $info['info_title-1']; ?></h3>
								<p class="info__txt"><?php echo $info['info_text-1']; ?></p>
							</div>
						<?php endif; ?>
                    </div>
                    <hr class="info__side">
                    <div class="info__block">
						<?php
						$info = get_field('info');
						if( $info ): ?>
							<div class="info__picture">
								<img src="<?php echo $info['info_img-2']; ?>" alt="Граф" class="info__img">
							</div>
							<div class="info__text">
								<h3 class="info__title"><?php echo $info['info_title-2']; ?></h3>
								<p class="info__txt"><?php echo $info['info_text-2']; ?></p>
							</div>
						<?php endif; ?>
                    </div>
                    <hr class="info__side">
                    <div class="info__block">
                        <?php
						$info = get_field('info');
						if( $info ): ?>
							<div class="info__picture">
								<img src="<?php echo $info['info_img-3']; ?>" alt="Рукопожатие" class="info__img">
							</div>
							<div class="info__text">
								<h3 class="info__title"><?php echo $info['info_title-3']; ?></h3>
								<p class="info__txt"><?php echo $info['info_text-3']; ?></p>
							</div>
						<?php endif; ?>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <h2 class="title thg"><?php the_field('tech_title') ?></h2>

                <div class="technology">
                        <?php if( have_rows('tech') ): while ( have_rows('tech') ) : the_row(); ?>
						<div class="technology__item">
							<div class="technology__picture"><img src="<?php the_sub_field('tech_img'); ?>" alt="CSS" class="technology__img"></div>
							<div class="technology__info">
								<h4 class="technology__name"><?php the_sub_field('tech_name'); ?></h4>
								<p class="technology__desc"><?php the_sub_field('tech_text'); ?></p>
							</div>
						</div>
						<?php endwhile; endif; ?>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
               
                <h2 class="title scp"><?php the_field('scope_main-title') ?></h2>
				<div class="scope">
					<?php if( have_rows('scope') ): while ( have_rows('scope') ) : the_row(); ?>
						<div class="scope__item">
							<div class="scope__top">
								<p class="scope__number"><?php the_sub_field('scope_number'); ?></p>
								<hr class="scope__line">
							</div>

							<div class="scope__text">
								<h3 class="scope__title"><?php the_sub_field('scope_title'); ?></h3>
								<p class="scope__info"><?php the_sub_field('scope_text'); ?></p>
							</div>
						</div>
					<?php endwhile; endif; ?>
				</div>
            </div>
        </section>

        <section>
            <div class="container">

                <div class="pack">
                    <h2 class="pack__title"><?php the_field('pack_main-title') ?></h2>
                    <p class="pack__text"><?php the_field('pack_main-text') ?></p>
                </div>

                <div class="package">
                    <div class="package__version">
                        <?php
						$pack_lite = get_field('pack_lite');	

						if( $pack_lite ): ?>
							<div class="package__margin">
								<h2 class="package__name"><?php echo $pack_lite['pack_lite-name']; ?></h2>
								<p class="package__time"><?php echo $pack_lite['pack_lite-time']; ?></p>
								<p class="package__item"><img src="<?php echo $pack_lite['pack_lite-img-1']; ?>" alt="Галка" class="package__tick"><?php echo $pack_lite['pack_lite-text-1']; ?></p>
								<p class="package__item"><img src="<?php echo $pack_lite['pack_lite-img-2']; ?>" alt="Галка" class="package__tick"><?php echo $pack_lite['pack_lite-text-2']; ?></p>
								<p class="package__item"><img src="<?php echo $pack_lite['pack_lite-img-3']; ?>" alt="Галка" class="package__tick"><?php echo $pack_lite['pack_lite-text-3']; ?></p>
								<p class="package__item"><img src="<?php echo $pack_lite['pack_lite-img-4']; ?>" alt="Галка" class="package__tick"><?php echo $pack_lite['pack_lite-text-4']; ?></p>
								<p class="package__item"><img src="<?php echo $pack_lite['pack_lite-img-5']; ?>" alt="Галка" class="package__tick"><?php echo $pack_lite['pack_lite-text-5']; ?></p>
								<p class="package__item"><img src="<?php echo $pack_lite['pack_lite-img-6']; ?>" alt="Галка" class="package__tick"><?php echo $pack_lite['pack_lite-text-6']; ?></p>
								<p class="package__item package__minus"><img src="<?php echo $pack_lite['pack_lite-img-7']; ?>" alt="Минус" class="package__tick"><?php echo $pack_lite['pack_lite-text-7']; ?></p>
								<p class="package__item package__minus"><img src="<?php echo $pack_lite['pack_lite-img-8']; ?>" alt="Минус" class="package__tick"><?php echo $pack_lite['pack_lite-text-8']; ?></p>
								<p class="package__item package__minus"><img src="<?php echo $pack_lite['pack_lite-img-9']; ?>" alt="Минус" class="package__tick"><?php echo $pack_lite['pack_lite-text-9']; ?></p>

								<div class="package__price">
									<hr class="package__line">
									<p class="package__price-num"><?php echo $pack_lite['pack_lite-price']; ?></p>
								</div>
							</div>
						<?php endif; ?>
                    </div>
                    <div class="package__version">
						<?php
						$pack_midl = get_field('pack_midl');	

						if( $pack_midl ): ?>
							<div class="package__margin">
								<h2 class="package__name"><?php echo $pack_midl['pack_midl-name']; ?></h2>
								<p class="package__time"><?php echo $pack_midl['pack_midl-time']; ?></p>
								<p class="package__item"><img src="<?php echo $pack_midl['pack_midl-img-1']; ?>" alt="Галка" class="package__tick"><?php echo $pack_midl['pack_midl-text-1']; ?></p>
								<p class="package__item"><img src="<?php echo $pack_midl['pack_midl-img-2']; ?>" alt="Галка" class="package__tick"><?php echo $pack_midl['pack_midl-text-2']; ?></p>
								<p class="package__item"><img src="<?php echo $pack_midl['pack_midl-img-3']; ?>" alt="Галка" class="package__tick"><?php echo $pack_midl['pack_midl-text-3']; ?></p>
								<p class="package__item"><img src="<?php echo $pack_midl['pack_midl-img-4']; ?>" alt="Галка" class="package__tick"><?php echo $pack_midl['pack_midl-text-4']; ?></p>
								<p class="package__item"><img src="<?php echo $pack_midl['pack_midl-img-5']; ?>" alt="Галка" class="package__tick"><?php echo $pack_midl['pack_midl-text-5']; ?></p>
								<p class="package__item"><img src="<?php echo $pack_midl['pack_midl-img-6']; ?>" alt="Галка" class="package__tick"><?php echo $pack_midl['pack_midl-text-6']; ?></p>
								<p class="package__item"><img src="<?php echo $pack_midl['pack_midl-img-7']; ?>" alt="Галка" class="package__tick"><?php echo $pack_midl['pack_midl-text-7']; ?></p>
								<p class="package__item package__minus"><img src="<?php echo $pack_midl['pack_midl-img-8']; ?>" alt="Минус" class="package__tick"><?php echo $pack_midl['pack_midl-text-8']; ?></p>
								<p class="package__item package__minus"><img src="<?php echo $pack_midl['pack_midl-img-9']; ?>" alt="Минус" class="package__tick"><?php echo $pack_midl['pack_midl-text-9']; ?></p>
								<div class="package__price">
									<hr class="package__line">
									<p class="package__price-num"><?php echo $pack_midl['pack_midl-price']; ?></p>
								</div>
							</div>
						<?php endif; ?>
                    </div>
                    <div class="package__version">
						<?php
						$pack_hard = get_field('pack_hard');	

						if( $pack_hard ): ?>
							<div class="package__margin">
								<h2 class="package__name"><?php echo $pack_hard['pack_hard-name']; ?></h2>
								<p class="package__time"><?php echo $pack_hard['pack_hard-time']; ?></p>
								<p class="package__item"><img src="<?php echo $pack_hard['pack_hard-img-1']; ?>" alt="Галка" class="package__tick"><?php echo $pack_hard['pack_hard-text-1']; ?></p>
								<p class="package__item"><img src="<?php echo $pack_hard['pack_hard-img-2']; ?>" alt="Галка" class="package__tick"><?php echo $pack_hard['pack_hard-text-2']; ?></p>
								<p class="package__item"><img src="<?php echo $pack_hard['pack_hard-img-3']; ?>" alt="Галка" class="package__tick"><?php echo $pack_hard['pack_hard-text-3']; ?></p>
								<p class="package__item"><img src="<?php echo $pack_hard['pack_hard-img-4']; ?>" alt="Галка" class="package__tick"><?php echo $pack_hard['pack_hard-text-4']; ?></p>
								<p class="package__item"><img src="<?php echo $pack_hard['pack_hard-img-5']; ?>" alt="Галка" class="package__tick"><?php echo $pack_hard['pack_hard-text-5']; ?></p>
								<p class="package__item"><img src="<?php echo $pack_hard['pack_hard-img-6']; ?>" alt="Галка" class="package__tick"><?php echo $pack_hard['pack_hard-text-6']; ?></p>
								<p class="package__item"><img src="<?php echo $pack_hard['pack_hard-img-7']; ?>" alt="Галка" class="package__tick"><?php echo $pack_hard['pack_hard-text-7']; ?></p>
								<p class="package__item"><img src="<?php echo $pack_hard['pack_hard-img-8']; ?>" alt="Галка" class="package__tick"><?php echo $pack_hard['pack_hard-text-8']; ?></p>
								<p class="package__item"><img src="<?php echo $pack_hard['pack_hard-img-9']; ?>" alt="Галка" class="package__tick"><?php echo $pack_hard['pack_hard-text-9']; ?></p>
								<hr class="package__plus">
								<div class="package__item-plus">
									<img src="<?php echo $pack_hard['pack_hard-img-10']; ?>" class="package__tick">
									<p class="package__text-plus"><?php echo $pack_hard['pack_hard-text-10']; ?></p>
								</div>
								<hr class="package__line-hard">
								<p class="package__price-plus"><?php echo $pack_hard['pack_hard-price']; ?></p>
							</div>
						<?php endif; ?>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <h2 class="title project"><?php the_field('sites_title') ?></h2>
				<div class="sites">
                <?php if( have_rows('sites') ): while ( have_rows('sites') ) : the_row(); ?>
					<div class="sites__block">
						<button class="sites__site">
							<div class="sites__picture"><img src="<?php the_sub_field('sites_img'); ?>" alt="Сайт Аппарель" class="sites__img"></div>
							<p class="sites__lab"><?php the_sub_field('sites_offline-button'); ?></p>
						</button>
						<h4 class="sites__text"><?php the_sub_field('sites_text'); ?></h4>
					</div>
				<?php endwhile; endif; ?>
				<button type="button" class="button__white sites-more"><?php the_field('sites_online-button'); ?></button>
				</div>
            </div>
        </section>
    </main>

<?php

get_footer();

?>
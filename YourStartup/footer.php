    <footer>
        <section>
            <div class="container">
                <div class="footer">
                    <div class="footer__big-btn">
                        <?php
						$footer_bigbtn = get_field('footer_bigbtn');
						if( $footer_bigbtn ): ?>
							<button class="footer__big-btn-button" type="button" onclick="openPopUp()">
								<p class="footer__big-btn-title"><?php echo $footer_bigbtn['footer_big-text']; ?></p>
								<div class="footer__big-btn-arrow">
									<img src="<?php echo $footer_bigbtn['footer_big-arrow-img']; ?>" alt="Стрелочка->" class="footer__big-btn-arrow">
								</div>
							</button>
						<?php endif; ?>
                    </div>
        
                    <div class="footer-lower">
                        <div class="footer-lower__item-logo">
                            <a href="#"><img src="<?php the_field('footer_logo') ?>" alt="Логотип компании" class="footer-lower__img"></a>
                        </div>
                        <div class="footer-lower__block">
                            <h5 class="footer-lower__block-name"><?php the_field('footer_lower-main-text-1') ?></h5>
                            <ul class="footer-lower__block-item">
                                <?php
								$footer_lower_1 = get_field('footer_lower_1');	
								if( $footer_lower_1 ): ?>
									<li class="footer-lower__block-content"><a class="footer-lower__block-content-link" href="#"><?php echo $footer_lower_1['footer_lower-text-1']; ?></a></li>
									<li class="footer-lower__block-content"><a class="footer-lower__block-content-link" href="#"><?php echo $footer_lower_1['footer_lower-text-2']; ?></a></li>
									<li class="footer-lower__block-content"><a class="footer-lower__block-content-link" href="#"><?php echo $footer_lower_1['footer_lower-text-3']; ?></a></li>
									<li class="footer-lower__block-content"><a class="footer-lower__block-content-link" href="#"><?php echo $footer_lower_1['footer_lower-text-4']; ?></a></li>
									<li class="footer-lower__block-content"><a class="footer-lower__block-content-link" href="#"><?php echo $footer_lower_1['footer_lower-text-5']; ?></a></li>
									<li class="footer-lower__block-content"><a class="footer-lower__block-content-link" href="#"><?php echo $footer_lower_1['footer_lower-text-6']; ?></a></li>
								<?php endif; ?>
                            </ul>
                        </div>
                        <div class="footer-lower__block">
                            <h5 class="footer-lower__block-name"><?php the_field('footer_lower-main-text-2') ?></h5>
                            <ul class="footer-lower__block-item">
                                <?php
								$footer_lower_2 = get_field('footer_lower_2');	
								if( $footer_lower_2 ): ?>
									<li class="footer-lower__block-content"><a class="footer-lower__block-content-link" href="#"><?php echo $footer_lower_2['footer_lower-text-1']; ?></a></li>
									<li class="footer-lower__block-content"><a class="footer-lower__block-content-link" href="#"><?php echo $footer_lower_2['footer_lower-text-2']; ?></a></li>
									<li class="footer-lower__block-content"><a class="footer-lower__block-content-link" href="#"><?php echo $footer_lower_2['footer_lower-text-3']; ?></a></li>
									<li class="footer-lower__block-content"><a class="footer-lower__block-content-link" href="#"><?php echo $footer_lower_2['footer_lower-text-4']; ?></a></li>
									<li class="footer-lower__block-content"><a class="footer-lower__block-content-link" href="#"><?php echo $footer_lower_2['footer_lower-text-5']; ?></a></li>
									<li class="footer-lower__block-content"><a class="footer-lower__block-content-link" href="#"><?php echo $footer_lower_2['footer_lower-text-6']; ?></a></li>
									<li class="footer-lower__block-content"><a class="footer-lower__block-content-link" href="#"><?php echo $footer_lower_2['footer_lower-text-7']; ?></a></li>
								<?php endif; ?>
                            </ul>
                        </div>
                        <div class="footer-lower__block">
                            <h5 class="footer-lower__block-name"><?php the_field('footer_lower-main-text-3') ?></h5>
                            <ul class="footer-lower__block-item">
                                <?php
								$footer_lower_3 = get_field('footer_lower_3');	
								if( $footer_lower_3 ): ?>
									<li class="footer-lower__block-content"><a class="footer-lower__block-content-link" href="#"><?php echo $footer_lower_3['footer_lower-text-1']; ?></a></li>
									<li class="footer-lower__block-content"><a class="footer-lower__block-content-link" href="#"><?php echo $footer_lower_3['footer_lower-text-2']; ?></a></li>
									<li class="footer-lower__block-content"><a class="footer-lower__block-content-link" href="#"><?php echo $footer_lower_3['footer_lower-text-3']; ?></a></li>
									<li class="footer-lower__block-content"><a class="footer-lower__block-content-link" href="#"><?php echo $footer_lower_3['footer_lower-text-4']; ?></a></li>
									<li class="footer-lower__block-content"><a class="footer-lower__block-content-link" href="#"><?php echo $footer_lower_3['footer_lower-text-5']; ?></a></li>
								<?php endif; ?>
                            </ul>
                        </div>
                    </div>

                    <div class="footer-info">
                        <ul class="footer-info__element footer-info__element-font">
                            <?php
							$footer_info = get_field('footer_info');	
							if( $footer_info ): ?>
								<li><?php echo $footer_info['footer_info_site']; ?></li>
								<li><?php echo $footer_info['footer_info_old']; ?></li>
								<li><a href="tel:#" class="footer-info__element-link"><?php echo $footer_info['footer_info_number']; ?></a></li>
								<li><a href="mailto:#" class="footer-info__element-link"><?php echo $footer_info['footer_info_email']; ?></a></li>
							<?php endif; ?>
                        </ul>
                        <ul class="footer-info__element-logo">
                            <?php
							$info_social = get_field('info_social');	
							if( $info_social ): ?>
								<li><a href="https://vk.com/cho_vilypilsya" class="footer-info__element-link"><img src="<?php echo $info_social['info_vk']; ?>" alt="Логотип соцсети Vk" class="footer-info__element-logo"></a></li>
								<li><a href="#" class="footer-info__element-link"><img src="<?php echo $info_social['info_inst']; ?>" alt="Логотип соцсети Instagram" class="footer-info__element-logo"></a></li>
							<?php endif; ?>
                        </ul>
                    </div>
                </div>
            </section>
        </footer>
        <!-- <script src="JavaScript/script.js"></script> -->
        <?php wp_footer(); ?>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
        <title>Твой стартап</title>

        <?php wp_head(); ?>
</head>
<body>
    <header class="header">
        <div class="logo">
            <img src="<?php the_field('logo_img') ?>" alt="Логотип компании" class="logo__img">
        </div>
        <nav class="nav">
            <ul class="nav__items">
				<?php
				$nav = get_field('nav');	
				if( $nav ): ?>
					<li class="nav__item"><a href="#" class="nav__link"><?php echo $nav['nav_item-1']; ?></a></li>
					<li class="nav__item"><a href="#" class="nav__link"><?php echo $nav['nav_item-2']; ?></a></li>
					<li class="nav__item"><a href="#" class="nav__link"><?php echo $nav['nav_item-3']; ?><span class="arrow"><img src="<?php the_field('nav_arrow') ?>"></span></a>
				
						<div class="nav__subnav-wrapper">
							<?php
							$subnav = get_field('subnav');	
							if( $subnav ): ?>
								<div class="nav__subnav">
									<a href="#" class="nav__subnav-link"><?php echo $subnav['subnav_item-1']; ?></a>
									<a href="#" class="nav__subnav-link"><?php echo $subnav['subnav_item-2']; ?></a>
									<a href="#" class="nav__subnav-link"><?php echo $subnav['subnav_item-3']; ?></a>
									<a href="#" class="nav__subnav-link"><?php echo $subnav['subnav_item-4']; ?></a>
								</div>
							<?php endif; ?>
						</div>
					</li>
					<li class="nav__item"><a href="#" class="nav__link"><?php echo $nav['nav_item-4']; ?></a></li>
				<?php endif; ?>
            </ul>
        </nav>
        <div class="right-nav">
            <a href="tel:#" class="right-nav__phone"><span class="nav__color-text"><?php the_field('nav_phone-color-text') ?></span><?php the_field('nav_phone-text') ?></a>
            <button class="button right-nav__button" onclick="openPopUp()"><?php the_field('nav_button-text') ?></button>
        </div>
        <div class="burger-nav">
            <span></span>
        </div>
    </header>
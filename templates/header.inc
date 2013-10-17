<div id="page">

  <header id="header" role="banner">

    <?php if ($logo): ?>
      <a href="<?php print $front_page . "/immigration"; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
    <?php endif; ?>

    <?php if ($site_name || $site_slogan): ?>
      <hgroup id="name-and-slogan">
        <?php if ($site_name): ?>
          <h1 id="site-name">
            <a href="<?php print $front_page . "/immigration"; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print t('Immigration'); ?></span></a>
          </h1>
        <?php endif; ?>

        <?php if ($site_slogan): ?>
          <h2 id="site-slogan"><?php print $site_slogan; ?></h2>
        <?php endif; ?>
					<h2 class="subtitle"><span class="green"><?php print t('Diverse.'); ?></span><span class="red"><?php print t(' Welcoming.'); ?></span><span class="black"><?php print t(' Vibrant.'); ?></span></h2>
      </hgroup><!-- /#name-and-slogan -->
    <?php endif; ?>



    <?php print render($page['header']); ?>

	</header>
  <div id="navigation">

    <?php print render($page['navigation']); ?>

  </div><!-- /#navigation -->
  <?php print $messages; ?>

<?php

/*<div id="page">

  <header id="header" role="banner">

    <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
    <?php endif; ?>

    <?php if ($site_name || $site_slogan): ?>
      <hgroup id="name-and-slogan">
        <?php if ($site_name): ?>
          <h1 id="site-name">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span>Immigration</span></a>
          </h1>
        <?php endif; ?>

        <?php if ($site_slogan): ?>
          <h2 id="site-slogan"><?php print $site_slogan; ?></h2>
        <?php endif; ?>
					<h2 class="subtitle">Diverse · Welcoming · Vibrant</h2>
      </hgroup><!-- /#name-and-slogan -->
    <?php endif; ?>



    <?php print render($page['header']); ?>

	</header>
  <div id="navigation">

    <?php print render($page['navigation']); ?>

  </div><!-- /#navigation -->
  <?php print $messages; ?>
*/
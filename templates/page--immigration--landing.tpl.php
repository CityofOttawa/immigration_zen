<?php
/**
 * @file
 * Zen theme's implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $secondary_menu_heading: The title of the menu used by the secondary links.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['header']: Items for the header region.
 * - $page['navigation']: Items for the navigation region, below the main menu (if any).
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['footer']: Items for the footer region.
 * - $page['bottom']: Items to appear at the bottom of the page below the footer.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see zen_preprocess_page()
 * @see template_process()
 */
?>

<div id="page">

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

	<div class="header-box">
		<a href="#" class="btn-fr" title="French Language">Francais</a>
		<a href="#" class="btn-fr btn-contact" title="Contact Us">Contact Us</a>

		<form id="search-bar" action="#" method="post">

				<label for="search">Search City of Ottawa</label>
				<input id="search" type="search" name="site-search" placeholder="Search...">

				<button type="submit" class="search-btn">Search</button>
		</form>
	</div><!-- /header-box -->
	</header>
  <div id="navigation">

    <?php if ($main_menu): ?>
      <nav id="main-menu" role="navigation">
        <?php
        // This code snippet is hard to modify. We recommend turning off the
        // "Main menu" on your sub-theme's settings form, deleting this PHP
        // code block, and, instead, using the "Menu block" module.
        // @see http://drupal.org/project/menu_block
        print theme('links__system_main_menu', array(
          'links' => $main_menu,
          'attributes' => array(
            'class' => array('links', 'inline', 'clearfix'),
          ),
          'heading' => array(
            'text' => t('Main menu'),
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?>
      </nav>
    <?php endif; ?>

    <?php print render($page['navigation']); ?>

  </div><!-- /#navigation -->

  <div id="main">
    <div id="content" class="column" role="main">
      <h1>Welcome to the City of Ottawa Immigration Portal</h1>
      <p>Morbi nec auctor risus, quis aliquam ligula. Donec augue enim, porttitor vitae tincidunt vel, tristique id ligula. Morbi eget ante lobortis, varius elit eu, mattis augue. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec vitae molestie lorem, quis cursus libero. Quisque sollicitudin ut est congue laoreet. Vivamus ut imperdiet nulla. Donec rutrum, mi in fringilla ullamcorper, eros arcu consectetur ipsum, sed ultrices justo neque id nisl.</p>

    <ul class="landing-items">
      <li>
        <figure>
          <?php print theme_image(array('path' => "/" .  drupal_get_path('theme', 'immigration_zen') . '/images/crop/why_choose_ottawa.jpg', 'alt' => t('Parliament building in the summer time'), 'title' => t('Parliament building in the summer time'))); ?>
          <figcaption>
            <a href="#">
              <h2><?php print t('Why Choose Ottawa'); ?></h2>
              <p>Lorem ipsum dolor sit amet, con secte tur adipiscing elit sed.</p>
            </a>
          </figcaption>
        </figure>
      </li>

      <li>
        <figure>
          <?php print theme_image(array('path' => "/" .  drupal_get_path('theme', 'immigration_zen') . '/images/crop/before_you_arrive.jpg')); ?>
          <figcaption>
            <a href="#">
              <h2><?php print t('Before you arrive'); ?></h2>
              <p>Lorem ipsum dolor sit amet, consect etur adipiscing elit sed.</p>
            </a>
          </figcaption>
        </figure>
      </li>
      
      <li>
        <figure>
          <?php print theme_image(array('path' => "/" .  drupal_get_path('theme', 'immigration_zen') . '/images/crop/after_you_arrive.jpg')); ?>
          <figcaption>
            <a href="#">
              <h2><?php print t('After you arrive'); ?></h2>
              <p>Lorem ipsum dolor sit amet, con secte tur adipiscing elit sed.</p>
            </a>
          </figcaption>
        </figure>
      </li>

      <li>
        <figure>
          <?php print theme_image(array('path' => "/" .  drupal_get_path('theme', 'immigration_zen') . '/images/crop/working_doing_business.jpg')); ?>
          <figcaption>
            <a href="#">
              <h2><?php print t('Working / doing business'); ?></h2>
              <p>Lorem ipsum dolor sit amet, con secte tur adipiscing elit sed.</p>
            </a>
          </figcaption>
        </figure>
      </li>

      <li>
        <figure>
          <?php print theme_image(array('path' => "/" .  drupal_get_path('theme', 'immigration_zen') . '/images/crop/international_students.jpg')); ?>
          <figcaption>
            <a href="#">
              <h2><?php print t('Learning'); ?></h2>
              <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit sed.</p>
            </a>
          </figcaption>
        </figure>
      </li>

      <li>
        <figure>
          <?php print theme_image(array('path' => "/" .  drupal_get_path('theme', 'immigration_zen') . '/images/crop/living_in_ottawa.jpg')); ?>
          <figcaption>
            <a href="#">
              <h2><?php print t('Living /engaging'); ?></h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed.</p>
            </a>
          </figcaption>
        </figure>
      </li>
    
		</div><!-- /#content -->



    <?php
      // Render the sidebars to see if there's anything in them.
      $sidebar_first  = render($page['sidebar_first']);
      $sidebar_second = render($page['sidebar_second']);
    ?>

    <?php if ($sidebar_first || $sidebar_second): ?>
      <aside class="sidebars">
        <?php print $sidebar_first; ?>
        <?php print $sidebar_second; ?>
      </aside><!-- /.sidebars -->
    <?php endif; ?>

  </div><!-- /#main -->

  <?php print render($page['footer']); ?>

</div><!-- /#page -->

<?php print render($page['bottom']); ?>

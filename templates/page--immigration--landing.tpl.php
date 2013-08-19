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

	</header>
  <div id="navigation">

    <?php print render($page['navigation']); ?>

  </div><!-- /#navigation -->
  <?php print $messages; ?>

  <div id="main">
    <div id="content" class="column" role="main">

    <?php print $messages; ?>
    <?php print render($tabs); ?>
    <?php print render($page['help']); ?>
    <?php if ($action_links): ?>
      <ul class="action-links"><?php print render($action_links); ?></ul>
    <?php endif; ?>
    <?php print render($page['content']); ?>
    <?php print $feed_icons; ?>

      <h1>Welcome to the City of Ottawa Immigration Portal</h1>
      <p>Morbi nec auctor risus, quis aliquam ligula. Donec augue enim, porttitor vitae tincidunt vel, tristique id ligula. Morbi eget ante lobortis, varius elit eu, mattis augue. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec vitae molestie lorem, quis cursus libero. Quisque sollicitudin ut est congue laoreet. Vivamus ut imperdiet nulla. Donec rutrum, mi in fringilla ullamcorper, eros arcu consectetur ipsum, sed ultrices justo neque id nisl.</p>



    <ul class="landing-items">
      <li>
        <figure>
          <?php print theme_image(array('path' => "/" .  drupal_get_path('theme', 'immigration_zen') . '/images/crop/why_choose_ottawa.jpg', 'alt' => t('A crowd is watching the changing of the guard on Parliament Hill in Ottawa.'), 'title' => t('An outline of the life in Ottawa and what Ottawa has to offer to new immigrants.'))); ?>
          <figcaption>
            <a href="#">
              <h2><?php print t('Why Choose Ottawa'); ?></h2>
              <p><?php print t("What Ottawa has to offer to new immigrants."); ?></p>
            </a>
          </figcaption>
        </figure>
      </li>

      <li>
        <figure>
          <?php print theme_image(array('path' => "/" .  drupal_get_path('theme', 'immigration_zen') . '/images/crop/before_you_arrive.jpg', 'alt' => t('A woman is seated writing a list.'), 'title' => t('A cultural and practical guide to preparing for life in Ottawa.') )); ?>
          <figcaption>
            <a href="#">
              <h2><?php print t('Before you arrive'); ?></h2>
              <p><?php print t("A cultural and practical guide to preparing for life in Ottawa."); ?></p>
            </a>
          </figcaption>
        </figure>
      </li>
      
      <li>
        <figure>
          <?php print theme_image(array('path' => "/" .  drupal_get_path('theme', 'immigration_zen') . '/images/crop/after_you_arrive.jpg', 'alt' => t('A woman stares upwards with a pensive expression on her face.'), 'title' => t('Adapting to life in Ottawa and the many programs, events and support services available.'))); ?>
          <figcaption>
            <a href="#">
              <h2><?php print t('After you arrive'); ?></h2>
              <p><?php print t("Adapting to life in Ottawa and support services available."); ?></p>
            </a>
          </figcaption>
        </figure>
      </li>

      <li>
        <figure>
          <?php print theme_image(array('path' => "/" .  drupal_get_path('theme', 'immigration_zen') . '/images/crop/working_doing_business.jpg', 'alt' => t('A group of business men smile while shaking hands.'), 'title' => t('A guide to finding work, starting or buying a business and access employment services.'))); ?>
          <figcaption>
            <a href="#">
              <h2><?php print t('Working / doing business'); ?></h2>
              <p><?php print t("Finding work and starting or buying a business."); ?></p>
            </a>
          </figcaption>
        </figure>
      </li>

      <li>
        <figure>
          <?php print theme_image(array('path' => "/" .  drupal_get_path('theme', 'immigration_zen') . '/images/crop/international_students.jpg', 'alt' => t('A group of international students pose while leaning on a railing.'), 'title' => t('A guide for international students looking to study, work and live in Ottawa.'))); ?>
          <figcaption>
            <a href="#">
              <h2><?php print t('Learning'); ?></h2>
              <p><?php print t("Studying, working and living as a student in Ottawa."); ?></p>
            </a>
          </figcaption>
        </figure>
      </li>

      <li>
        <figure>
          <?php print theme_image(array('path' => "/" .  drupal_get_path('theme', 'immigration_zen') . '/images/crop/living_in_ottawa.jpg', 'alt' => t('An open green space next to a street with bikes lined up.'), 'title' => t('An outline of the living conditions and government services in Ottawa.'))); ?>
          <figcaption>
            <a href="#">
              <h2><?php print t('Living /engaging'); ?></h2>
              <p><?php print t("Cost of living and government services in Ottawa."); ?></p>
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

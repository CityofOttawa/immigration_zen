<?php
/**
 * @file
 * Zen theme's implementation to display a region.
 *
 * Available variables:
 * - $content: The content for this region, typically blocks.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the following:
 *   - region: The current template type, i.e., "theming hook".
 *   - region-[name]: The name of the region with underscores replaced with
 *     dashes. For example, the page_top region would have a region-page-top class.
 * - $region: The name of the region variable as defined in the theme's .info file.
 *
 * Helper variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $is_admin: Flags true when the current user is an administrator.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 *
 * @see template_preprocess()
 * @see template_preprocess_region()
 * @see zen_preprocess_region()
 * @see template_process()
 */
?>
  <footer id="footer" class="<?php print $classes; ?>" role="contentinfo">
		<a href="/" title=""><img src="<?php print '/'. drupal_get_path('theme', 'immigration_zen') . '/images/ottawa-white.png'; ?>" alt="<?php print t('City of Ottawa Logo'); ?>"></a>
			<p>&copy; 2001-<?php print date("Y");?> <?php print t('City of Ottawa'); ?></p>

			<address>110 Laurier Avenue West <br>
			Ottawa, Ontario, K1P 1J1
			</address>
			
			<ul class="footer-menu" role="navigation">
				<li><a href="#">Disclaimer</a></li>
				<li><a href="#">Privacy</a></li>
				<li><a href="#">Accessibility</a></li>
			</ul>


  </footer><!-- region__footer -->


<?php
/*
Available variables:

General utility variables:

    $base_path: The base URL path of the Drupal installation. At the very least, this will always default to /.
    $directory: The directory the template is located in, e.g. modules/system or themes/bartik.
    $is_front: TRUE if the current page is the front page.
    $logged_in: TRUE if the user is registered and signed in.
    $is_admin: TRUE if the user has permission to access administration pages.

Site identity:

    $front_page: The URL of the front page. Use this instead of $base_path, when linking to the front page. This includes the language domain or prefix.
    $logo: The path to the logo image, as defined in theme configuration.
    $site_name: The name of the site, empty when display has been disabled in theme settings.
    $site_slogan: The slogan of the site, empty when display has been disabled in theme settings.
    $hide_site_name: TRUE if the site name has been toggled off on the theme settings page. If hidden, the "element-invisible" class is added to make the site name visually hidden, but still accessible.
    $hide_site_slogan: TRUE if the site slogan has been toggled off on the theme settings page. If hidden, the "element-invisible" class is added to make the site slogan visually hidden, but still accessible.

Navigation:

    $main_menu (array): An array containing the Main menu links for the site, if they have been configured.
    $secondary_menu (array): An array containing the Secondary menu links for the site, if they have been configured.
    $breadcrumb: The breadcrumb trail for the current page.

Page content (in order of occurrence in the default page.tpl.php):

    $title_prefix (array): An array containing additional output populated by modules, intended to be displayed in front of the main title tag that appears in the template.
    $title: The page title, for use in the actual HTML content.
    $title_suffix (array): An array containing additional output populated by modules, intended to be displayed after the main title tag that appears in the template.
    $messages: HTML for status and error messages. Should be displayed prominently.
    $tabs (array): Tabs linking to any sub-pages beneath the current page (e.g., the view and edit tabs when displaying a node).
    $action_links (array): Actions local to the page, such as 'Add menu' on the menu administration interface.
    $feed_icons: A string of all feed icons for the current page.
    $node: The node object, if there is an automatically-loaded node associated with the page, and the node ID is the second argument in the page's path (e.g. node/12345 and node/12345/revisions, but not comment/reply/12345).

Regions:

    $page['header']: Items for the header region.
    $page['featured']: Items for the featured region.
    $page['highlighted']: Items for the highlighted content region.
    $page['help']: Dynamic help text, mostly for admin pages.
    $page['content']: The main content of the current page.
    $page['footer']: Items for the footer region.
*/
?>
<a name="#top"></a>
<div id="container">
  <div id="container-inner" class="row">
    <div id="leftcol" class="threecol cushion alpha omega">
     <header id="header">
			<div id="logo-name">
		   <?php if ($logo): ?>
				<a class="logo-link" href="<?php print $base_path; ?>"><img id="logo" src="<?php print $logo; ?>" /></a>
       	<h1><a class="site-name" href="<?php print $base_path; ?>"><?php print $site_name; ?></a></h1>
			<?php endif; ?>
		<?php if ($site_slogan): ?>
			<div id="tagline"><?php print $site_slogan; ?></div>
		<?php endif; ?>
	</div>
      <div id="menu-toggle">
        <span class="menu-text">Menu</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </div>
			<nav>
				<?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'clearfix')))); ?>
			</nav>
			<?php if ($page['header']): ?>
		    <div id="header-wrap">
			    <?php print render($page['header']); ?>
			    <?php // print $global_feed; ?>
			  </div>
			<?php endif; ?>
    </header>
  </div> <!-- /#leftcol -->
    <div id="content-wrap" class="ninecol">
		<?php print $messages; ?>
	  <div id="action-links"><?php print render($action_links); ?></div>
  	<?php if(empty($is_front) && $title): ?>
  	  <?php if($title_prefix): ?>
  		<span class="title-prefix">
  		  <?php print render($title_prefix); ?>
  		</span>
  	  <?php endif; ?>
  	  <h1> <?php print $title; ?> </h1>
  		<?php if($title_suffix): ?>
  		<span class="title-suffix">
  		  <?php print render($title_suffix); ?>
  		</span>
  	  <?php endif; ?>
  	<?php endif; ?>
	  

  	<?php if($tabs): ?>
  	  <div id="tabs">
  		<?php print render($tabs); ?>
  	  </div>
  	<?php endif; ?>

  	<?php print render($page['help']); ?>
  	<?php print render($page['highlighted']); ?>
  	<?php print render($page['content']); ?>
    </div> <!-- /#content-wrap -->
	  
  </div>
  <footer>
    <?php print render($page['footer']); ?>
	</footer>
  
</div> <!-- /#container -->
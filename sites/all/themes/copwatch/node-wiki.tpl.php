<?php // $Id: node.tpl.php,v 1.5.2.2 2006/11/19 13:14:01 weitzman Exp $
?>
<div class="node-wrapper wrapper-<?php print($node->type);?>">
<div class="node-header">
	<div class="header-content">
	  <?php if ($picture) {
	    print $picture;
	  }?>
	  <?php if ($page == 0) { ?><h2 class="title"><a href="<?php print $node_url?>"><?php print $title?></a></h2><?php }; ?>
	  
	  <span class="submitted"><?php print $submitted?></span>
	</div>
</div>	  
	  <div class="content"><?php print $content?></div>
<div class="node-footer">
	<div class="footer-content">
	 <?php print '<div class= "keywords">'. t('Keywords'). ': '. $terms. '</div>';?>  
	  <?php if ($node->og_groups && $page) {
	        for ($ind=0; $ind < count($node->og_groups); $ind++) {
	           $og_links['og_'. $node->og_groups[$ind]] = array('title' => $node->og_groups_names[$ind], 'href' => 'node/'. $node->og_groups[$ind]);
	        }
	        $og_links = theme('links', $og_links);
	        print '<div class="groups">'. t('Groups'). ': '.  $og_links. '</div>';
		   } ?>
	  <?php if ($links) { ?><div class="links">&raquo; <?php print $links?></div><?php }; ?>
	</div>
</div>
</div>
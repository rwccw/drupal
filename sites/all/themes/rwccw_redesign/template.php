<?php

function rwccw_redesign_preprocess_node(&$vars) {
  $vars['submitted'] = t('Posted by !username | !datetime', array('!username' => $vars['name'], '!datetime' => $vars['date']));
}
function rwccw_redesign_preprocess_comment(&$vars) {
  $vars['submitted'] = t('Posted by !username | !datetime', array('!username' => $vars['author'], '!datetime' => $vars['created']));
}
function rwccw_redesign_breadcrumb($variables) {
  //$variables['breadcrumb'][] = drupal_get_title();
  
  $breadcrumb = $variables['breadcrumb'];
  
  if (!empty($breadcrumb)) {
    $output = '<h2 class="element-invisible">' . t('You are here') . '</h2>';
    $crumbs = '<div class="breadcrumb">';
    $array_size = count($breadcrumb);
    $i = 0;
    while ( $i < $array_size) {
      $crumbs .= '<span class="breadcrumb-' . $i;
      if ($i == 0) {
        $crumbs .= ' first';
      }
      $crumbs .=  '">' . $breadcrumb[$i] . '</span> &nbsp; /  &nbsp; ';
      $i++;
    }
   $crumbs .= '<span class="active"> <strong>'. drupal_get_title() .'</strong> </span>';
   $crumbs .= '</div>';
    return $crumbs;
  }
}

function rwccw_redesign_feed_icon($variables) {
  $directory = path_to_theme();
  $text = t('Subscribe to @feed-title', array('@feed-title' => $variables['title']));
  if ($image = theme('image', array('path' => $directory .'/images/rss.png', 'alt' => $text))) {
    return l($image, $variables['url'], array('html' => TRUE, 'attributes' => array('class' => array('feed-icon'), 'title' => $text)));
  }
}

function rwccw_redesign_preprocess_page(&$vars) {
    $vars['global_feed'] = theme('feed_icon', array('url' => 'rss.xml', 'title' => 'our feed'));
}

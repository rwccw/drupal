<?php
// $ID$

/**
 * @file
 * Administration page callbacks for the logabug module.
 */

/**
 * Define the settings form.
 * 
 * @ingroup forms
 * @see system_settings_form().
 */

function logabug_admin_settings() {
  $options = node_get_types('names');
  $form['logabug_options'] = array(
    '#type' => 'fieldset',
    '#title' => t('General options')
  );
  $form['logabug_options']['logabug_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Link'),
    '#default_value' => variable_get('logabug_link', NULL),
    '#description' => t('The link "Log a Bug" points to. You can also populate the link using tokens.') . theme('token_help', 'global'),
  );
  $form['logabug_options']['logabug_pages'] = array(
    '#type' => 'textarea',
    '#title' => t('Deactivate "Log a Bug" on specific pages'),
    '#default_value' => variable_get('logabug_pages', ""),
    '#description' => t("Enter one page per line as Drupal paths. The '*' character is a wildcard. Example paths are %blog for the blog page and %blog-wildcard for every personal blog. %front is the front page.", array('%blog' => 'blog', '%blog-wildcard' => 'blog/*', '%front' => '<front>')),
  );

  return system_settings_form($form);
}


<?php
/**
 * @file
 * testimonials.features.inc
 */

/**
 * Implements hook_views_api().
 */
function testimonials_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}

/**
 * Implements hook_node_info().
 */
function testimonials_node_info() {
  $items = array(
    'testimonial' => array(
      'name' => t('Testimonial'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Testimonial ID'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}

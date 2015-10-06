<?php
/**
 * @file
 * feature_content_type.features.inc
 */

/**
 * Implements hook_node_info().
 */
function feature_content_type_node_info() {
  $items = array(
    'curriculum' => array(
      'name' => t('Curriculum'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}

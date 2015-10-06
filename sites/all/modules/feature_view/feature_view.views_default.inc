<?php
/**
 * @file
 * feature_view.views_default.inc
 */

/**
 * Implements hook_views_default_views().
 */
function feature_view_views_default_views() {
  $export = array();

  $view = new view();
  $view->name = 'curriculum';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'node';
  $view->human_name = 'Curriculum';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['title'] = 'Curriculum';
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'full';
  $handler->display->display_options['pager']['options']['items_per_page'] = '10';
  $handler->display->display_options['style_plugin'] = 'semanticviews_default';
  $handler->display->display_options['row_plugin'] = 'semanticviews_fields';
  $handler->display->display_options['row_options']['skip_blank'] = 0;
  $handler->display->display_options['row_options']['semantic_html'] = array(
    'title' => array(
      'element_type' => 'div',
      'class' => '',
    ),
  );
  /* Field: Content: Grade */
  $handler->display->display_options['fields']['field_field_grade']['id'] = 'field_field_grade';
  $handler->display->display_options['fields']['field_field_grade']['table'] = 'field_data_field_field_grade';
  $handler->display->display_options['fields']['field_field_grade']['field'] = 'field_field_grade';
  $handler->display->display_options['fields']['field_field_grade']['label'] = '';
  $handler->display->display_options['fields']['field_field_grade']['element_label_colon'] = FALSE;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  /* Field: Content: Body */
  $handler->display->display_options['fields']['body']['id'] = 'body';
  $handler->display->display_options['fields']['body']['table'] = 'field_data_body';
  $handler->display->display_options['fields']['body']['field'] = 'body';
  $handler->display->display_options['fields']['body']['label'] = '';
  $handler->display->display_options['fields']['body']['element_label_colon'] = FALSE;
  /* Field: Content: image */
  $handler->display->display_options['fields']['field_curriculum_image']['id'] = 'field_curriculum_image';
  $handler->display->display_options['fields']['field_curriculum_image']['table'] = 'field_data_field_curriculum_image';
  $handler->display->display_options['fields']['field_curriculum_image']['field'] = 'field_curriculum_image';
  $handler->display->display_options['fields']['field_curriculum_image']['label'] = '';
  $handler->display->display_options['fields']['field_curriculum_image']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_curriculum_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_curriculum_image']['settings'] = array(
    'image_style' => 'medium',
    'image_link' => '',
  );
  /* Sort criterion: Content: Post date */
  $handler->display->display_options['sorts']['created']['id'] = 'created';
  $handler->display->display_options['sorts']['created']['table'] = 'node';
  $handler->display->display_options['sorts']['created']['field'] = 'created';
  $handler->display->display_options['sorts']['created']['order'] = 'DESC';
  /* Contextual filter: Content: Grade (field_field_grade) */
  $handler->display->display_options['arguments']['field_field_grade_value']['id'] = 'field_field_grade_value';
  $handler->display->display_options['arguments']['field_field_grade_value']['table'] = 'field_data_field_field_grade';
  $handler->display->display_options['arguments']['field_field_grade_value']['field'] = 'field_field_grade_value';
  $handler->display->display_options['arguments']['field_field_grade_value']['default_action'] = 'default';
  $handler->display->display_options['arguments']['field_field_grade_value']['default_argument_type'] = 'node';
  $handler->display->display_options['arguments']['field_field_grade_value']['summary']['number_of_records'] = '0';
  $handler->display->display_options['arguments']['field_field_grade_value']['summary']['format'] = 'default_summary';
  $handler->display->display_options['arguments']['field_field_grade_value']['summary_options']['items_per_page'] = '25';
  $handler->display->display_options['arguments']['field_field_grade_value']['limit'] = '0';
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'curriculum' => 'curriculum',
  );

  /* Display: Page */
  $handler = $view->new_display('page', 'Page', 'page');
  $handler->display->display_options['defaults']['style_plugin'] = FALSE;
  $handler->display->display_options['style_plugin'] = 'semanticviews_default';
  $handler->display->display_options['style_options']['group']['element_type'] = '';
  $handler->display->display_options['style_options']['group']['class'] = '';
  $handler->display->display_options['style_options']['row']['class'] = 'custom_curriculum';
  $handler->display->display_options['style_options']['row']['first_class'] = '';
  $handler->display->display_options['style_options']['row']['last_class'] = '';
  $handler->display->display_options['style_options']['row']['last_every_nth'] = '';
  $handler->display->display_options['style_options']['row']['striping_classes'] = '';
  $handler->display->display_options['defaults']['style_options'] = FALSE;
  $handler->display->display_options['defaults']['row_plugin'] = FALSE;
  $handler->display->display_options['row_plugin'] = 'semanticviews_fields';
  $handler->display->display_options['row_options']['skip_blank'] = 1;
  $handler->display->display_options['row_options']['semantic_html'] = array(
    'title' => array(
      'element_type' => 'h2',
      'class' => 'custom_heading',
    ),
    'body' => array(
      'element_type' => 'div',
      'class' => 'custom_body',
    ),
    'field_field_grade' => array(
      'element_type' => 'article',
      'class' => 'custom_article',
    ),
    'field_curriculum_image' => array(
      'element_type' => 'div',
      'class' => 'custom_image',
    ),
  );
  $handler->display->display_options['defaults']['row_options'] = FALSE;
  $handler->display->display_options['path'] = 'curriculum-kits';
  $export['curriculum'] = $view;

  return $export;
}

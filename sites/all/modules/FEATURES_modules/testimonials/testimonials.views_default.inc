<?php
/**
 * @file
 * testimonials.views_default.inc
 */

/**
 * Implements hook_views_default_views().
 */
function testimonials_views_default_views() {
  $export = array();

  $view = new view();
  $view->name = 'ks_testimonials';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'node';
  $view->human_name = 'KS Testimonials';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'full';
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['row_plugin'] = 'fields';
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
  /* Field: Content: Citation or additional info */
  $handler->display->display_options['fields']['field_testimonial_citation']['id'] = 'field_testimonial_citation';
  $handler->display->display_options['fields']['field_testimonial_citation']['table'] = 'field_data_field_testimonial_citation';
  $handler->display->display_options['fields']['field_testimonial_citation']['field'] = 'field_testimonial_citation';
  $handler->display->display_options['fields']['field_testimonial_citation']['label'] = '';
  $handler->display->display_options['fields']['field_testimonial_citation']['element_label_colon'] = FALSE;
  /* Field: Content: Title or affiliation */
  $handler->display->display_options['fields']['field_testimonial_organisation']['id'] = 'field_testimonial_organisation';
  $handler->display->display_options['fields']['field_testimonial_organisation']['table'] = 'field_data_field_testimonial_organisation';
  $handler->display->display_options['fields']['field_testimonial_organisation']['field'] = 'field_testimonial_organisation';
  $handler->display->display_options['fields']['field_testimonial_organisation']['label'] = '';
  $handler->display->display_options['fields']['field_testimonial_organisation']['element_label_colon'] = FALSE;
  /* Field: Content: Who */
  $handler->display->display_options['fields']['field_testimonial_by_whom']['id'] = 'field_testimonial_by_whom';
  $handler->display->display_options['fields']['field_testimonial_by_whom']['table'] = 'field_data_field_testimonial_by_whom';
  $handler->display->display_options['fields']['field_testimonial_by_whom']['field'] = 'field_testimonial_by_whom';
  $handler->display->display_options['fields']['field_testimonial_by_whom']['label'] = '';
  $handler->display->display_options['fields']['field_testimonial_by_whom']['element_label_colon'] = FALSE;
  /* Field: Content: Testimonial image */
  $handler->display->display_options['fields']['field_testimonial_image']['id'] = 'field_testimonial_image';
  $handler->display->display_options['fields']['field_testimonial_image']['table'] = 'field_data_field_testimonial_image';
  $handler->display->display_options['fields']['field_testimonial_image']['field'] = 'field_testimonial_image';
  $handler->display->display_options['fields']['field_testimonial_image']['label'] = '';
  $handler->display->display_options['fields']['field_testimonial_image']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_testimonial_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_testimonial_image']['settings'] = array(
    'image_style' => '',
    'image_link' => '',
  );
  /* Sort criterion: Content: Post date */
  $handler->display->display_options['sorts']['created']['id'] = 'created';
  $handler->display->display_options['sorts']['created']['table'] = 'node';
  $handler->display->display_options['sorts']['created']['field'] = 'created';
  $handler->display->display_options['sorts']['created']['order'] = 'DESC';
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
    'testimonial' => 'testimonial',
  );
  $export['ks_testimonials'] = $view;

  return $export;
}

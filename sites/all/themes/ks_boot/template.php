<?php

/**
 * @file
 * template.php
 */
 function ks_boot_form_alter(&$form, &$form_state, $form_id) {
  if ($form['#id'] == 'user-login-form') {
    //dpm($form);
    $form['name']['#title'] = t("Username");
 
    $form['actions']['submit']['#value'] = t("Login");
  }
}
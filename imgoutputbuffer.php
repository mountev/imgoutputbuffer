<?php

require_once 'imgoutputbuffer.civix.php';
use CRM_Imgoutputbuffer_ExtensionUtil as E;

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/ 
 */
function imgoutputbuffer_civicrm_config(&$config) {
  _imgoutputbuffer_civix_civicrm_config($config);
  // clean any output buffers for civicrm/file browse/downloads
  $path = CRM_Utils_System::currentPath();
  if ($path == 'civicrm/file') {
    $levels = ob_get_level();
    for ($i=0; $i<$levels; $i++) {
      ob_end_clean();
    }
  }
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_xmlMenu
 */
function imgoutputbuffer_civicrm_xmlMenu(&$files) {
  _imgoutputbuffer_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function imgoutputbuffer_civicrm_install() {
  _imgoutputbuffer_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_postInstall
 */
function imgoutputbuffer_civicrm_postInstall() {
  _imgoutputbuffer_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_uninstall
 */
function imgoutputbuffer_civicrm_uninstall() {
  _imgoutputbuffer_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function imgoutputbuffer_civicrm_enable() {
  _imgoutputbuffer_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_disable
 */
function imgoutputbuffer_civicrm_disable() {
  _imgoutputbuffer_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_upgrade
 */
function imgoutputbuffer_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _imgoutputbuffer_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_managed
 */
function imgoutputbuffer_civicrm_managed(&$entities) {
  _imgoutputbuffer_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types.
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_caseTypes
 */
function imgoutputbuffer_civicrm_caseTypes(&$caseTypes) {
  _imgoutputbuffer_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_angularModules
 */
function imgoutputbuffer_civicrm_angularModules(&$angularModules) {
  _imgoutputbuffer_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_alterSettingsFolders
 */
function imgoutputbuffer_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _imgoutputbuffer_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_entityTypes
 */
function imgoutputbuffer_civicrm_entityTypes(&$entityTypes) {
  _imgoutputbuffer_civix_civicrm_entityTypes($entityTypes);
}

/**
 * Implements hook_civicrm_thems().
 */
function imgoutputbuffer_civicrm_themes(&$themes) {
  _imgoutputbuffer_civix_civicrm_themes($themes);
}

// --- Functions below this ship commented out. Uncomment as required. ---

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_preProcess
 *
function imgoutputbuffer_civicrm_preProcess($formName, &$form) {

} // */

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_navigationMenu
 *
function imgoutputbuffer_civicrm_navigationMenu(&$menu) {
  _imgoutputbuffer_civix_insert_navigation_menu($menu, 'Mailings', array(
    'label' => E::ts('New subliminal message'),
    'name' => 'mailing_subliminal_message',
    'url' => 'civicrm/mailing/subliminal',
    'permission' => 'access CiviMail',
    'operator' => 'OR',
    'separator' => 0,
  ));
  _imgoutputbuffer_civix_navigationMenu($menu);
} // */

//function imgoutputbuffer_civicrm_config( &$config ) {
    //$civitestRoot = dirname( __FILE__ ) . DIRECTORY_SEPARATOR;

    //// fix php include path
    //$include_path = $civitestRoot . PATH_SEPARATOR . get_include_path( );
    //set_include_path( $include_path );

    //// fix template path
    //$templateDir = $civitestRoot . 'templates' . DIRECTORY_SEPARATOR;
    //$template =& CRM_Core_Smarty::singleton( );
    //array_unshift( $template->template_dir, $templateDir );
//}

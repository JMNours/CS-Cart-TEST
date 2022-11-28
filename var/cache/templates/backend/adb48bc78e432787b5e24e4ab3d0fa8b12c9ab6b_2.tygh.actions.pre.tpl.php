<?php
/* Smarty version 4.1.0, created on 2022-11-27 19:24:43
  from '/home/j/jenainzj/jenainzj.beget.tech/public_html/design/backend/templates/addons/product_reviews/hooks/index/actions.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63838f4b73c0e2_43898264',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'adb48bc78e432787b5e24e4ab3d0fa8b12c9ab6b' => 
    array (
      0 => '/home/j/jenainzj/jenainzj.beget.tech/public_html/design/backend/templates/addons/product_reviews/hooks/index/actions.pre.tpl',
      1 => 1669566165,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63838f4b73c0e2_43898264 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/j/jenainzj/jenainzj.beget.tech/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
?>

<?php if (fn_allowed_for("ULTIMATE") && $_smarty_tpl->tpl_vars['runtime']->value['controller'] === 'reviews' && ($_smarty_tpl->tpl_vars['runtime']->value['mode'] === 'manage' && $_smarty_tpl->tpl_vars['addons']->value['product_reviews']['split_reviews_by_storefronts'] !== smarty_modifier_enum("YesNo::YES") || $_smarty_tpl->tpl_vars['runtime']->value['mode'] === 'update')) {?>
    <?php $_smarty_tpl->_assignInScope('select_storefront', false ,false ,2);
}
}
}

<?php
/* Smarty version 4.1.0, created on 2022-11-27 19:25:07
  from '/home/j/jenainzj/jenainzj.beget.tech/public_html/design/themes/responsive/templates/addons/geo_maps/hooks/index/styles.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63838f638b9e46_86867784',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbe4c3969e9f988138710a9df8cd30366958cdbf' => 
    array (
      0 => '/home/j/jenainzj/jenainzj.beget.tech/public_html/design/themes/responsive/templates/addons/geo_maps/hooks/index/styles.post.tpl',
      1 => 1669566272,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63838f638b9e46_86867784 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/j/jenainzj/jenainzj.beget.tech/public_html/app/functions/smarty_plugins/function.style.php','function'=>'smarty_function_style',),1=>array('file'=>'/home/j/jenainzj/jenainzj.beget.tech/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
echo smarty_function_style(array('src'=>"addons/geo_maps/styles.less"),$_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/geo_maps/hooks/index/styles.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/geo_maps/hooks/index/styles.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo smarty_function_style(array('src'=>"addons/geo_maps/styles.less"),$_smarty_tpl);?>

<?php }
}
}
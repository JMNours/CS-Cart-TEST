<?php
/* Smarty version 4.1.0, created on 2022-11-27 19:25:07
  from '/home/j/jenainzj/jenainzj.beget.tech/public_html/design/themes/responsive/templates/common/loading_box.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63838f63e8cc45_04299439',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29a4edce0107fdfe17da870c4c6be4aaa1f37c10' => 
    array (
      0 => '/home/j/jenainzj/jenainzj.beget.tech/public_html/design/themes/responsive/templates/common/loading_box.tpl',
      1 => 1669566271,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63838f63e8cc45_04299439 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/j/jenainzj/jenainzj.beget.tech/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div id="ajax_overlay" class="ty-ajax-overlay"></div>
<div id="ajax_loading_box" class="ty-ajax-loading-box"></div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="common/loading_box.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/loading_box.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div id="ajax_overlay" class="ty-ajax-overlay"></div>
<div id="ajax_loading_box" class="ty-ajax-loading-box"></div>
<?php }
}
}

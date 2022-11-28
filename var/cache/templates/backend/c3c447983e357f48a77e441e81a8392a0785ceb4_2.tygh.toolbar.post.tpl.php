<?php
/* Smarty version 4.1.0, created on 2022-11-27 19:24:43
  from '/home/j/jenainzj/jenainzj.beget.tech/public_html/design/backend/templates/addons/help_center/hooks/index/toolbar.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63838f4b97c940_66701608',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3c447983e357f48a77e441e81a8392a0785ceb4' => 
    array (
      0 => '/home/j/jenainzj/jenainzj.beget.tech/public_html/design/backend/templates/addons/help_center/hooks/index/toolbar.post.tpl',
      1 => 1669566165,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63838f4b97c940_66701608 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/j/jenainzj/jenainzj.beget.tech/public_html/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "admin") {?>
    <div class="help-center__toolbar help-center__toolbar--hidden">
        <a class="btn help-center__show-help-center">
            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-question-sign help-center__show-help-center--icon"),$_smarty_tpl);?>

        </a>
    </div>
<?php }
}
}

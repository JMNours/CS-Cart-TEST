<?php
/* Smarty version 4.1.0, created on 2022-11-27 19:24:43
  from '/home/j/jenainzj/jenainzj.beget.tech/public_html/design/backend/templates/buttons/helpdesk.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63838f4b9b28b5_48511427',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a25db08f98735b45484885647f000eb4bec3a433' => 
    array (
      0 => '/home/j/jenainzj/jenainzj.beget.tech/public_html/design/backend/templates/buttons/helpdesk.tpl',
      1 => 1669566166,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63838f4b9b28b5_48511427 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('helpdesk_account.sign_in'));
$_smarty_tpl->_assignInScope('btn_text', (($tmp = $_smarty_tpl->tpl_vars['btn_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("helpdesk_account.sign_in") ?? null : $tmp));
$_smarty_tpl->_assignInScope('btn_href', (($tmp = $_smarty_tpl->tpl_vars['btn_href']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['app']->value["helpdesk.connect_url"] ?? null : $tmp));?>
<a class="btn btn-primary <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btn_class']->value, ENT_QUOTES, 'UTF-8');?>
"
   href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['btn_href']->value), ENT_QUOTES, 'UTF-8');?>
"
>
    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 30 30"><g fill="#fff"><path d="M0 0h9.091v9.091H0zM10 10h9.091v9.091H10zM20.909 10H30v9.091h-9.091zM10 20.909h9.091V30H10zM20.909 20.909H30V30h-9.091z"/></g></svg>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btn_text']->value, ENT_QUOTES, 'UTF-8');?>

</a>
<?php }
}

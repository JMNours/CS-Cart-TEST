<?php
/* Smarty version 4.1.0, created on 2022-11-27 19:24:38
  from '/home/j/jenainzj/jenainzj.beget.tech/public_html/design/backend/templates/addons/call_requests/settings/info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63838f460464b2_24079677',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f15456bfc1d091b7b5accaf19322ae80d2899f4' => 
    array (
      0 => '/home/j/jenainzj/jenainzj.beget.tech/public_html/design/backend/templates/addons/call_requests/settings/info.tpl',
      1 => 1669566165,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63838f460464b2_24079677 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('call_requests.phone_from_settings'));
?>
<div class="control-group setting-wide call_requests">

    <label for="addon_option_call_requests_phone" class="control-label "><?php echo $_smarty_tpl->__("call_requests.phone_from_settings");?>
:</label>

    <div class="controls">
        <p><bdi><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_phone'], ENT_QUOTES, 'UTF-8');?>
</bdi></p>
    </div>

</div><?php }
}

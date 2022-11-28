<?php
/* Smarty version 4.1.0, created on 2022-11-27 19:24:43
  from '/home/j/jenainzj/jenainzj.beget.tech/public_html/design/backend/templates/common/comet.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63838f4bc09f69_09363976',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f6906d5605cb9d77c6ef3bb01906d0715159917' => 
    array (
      0 => '/home/j/jenainzj/jenainzj.beget.tech/public_html/design/backend/templates/common/comet.tpl',
      1 => 1669566166,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63838f4bc09f69_09363976 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('processing'));
?>
<a id="comet_container_controller" data-backdrop="static" data-keyboard="false" href="#comet_control" data-toggle="modal" class="hide"></a>

<div class="modal hide fade" id="comet_control" tabindex="-1" role="dialog" aria-labelledby="comet_title" aria-hidden="true">
    <div class="modal-header">
        <h3 id="comet_title"><?php echo $_smarty_tpl->__("processing");?>
</h3>
    </div>
    <div class="modal-body">
        <p></p>
        <div class="progress progress-striped active">
                        <div class="bar" style="width: 0%;"></div>
        </div>
    </div>
</div><?php }
}

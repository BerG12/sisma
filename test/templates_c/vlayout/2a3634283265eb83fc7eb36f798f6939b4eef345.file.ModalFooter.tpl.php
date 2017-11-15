<?php /* Smarty version Smarty-3.1.7, created on 2017-11-14 19:46:54
         compiled from "/home/martin/lampstack-5.6.32-1/apache2/htdocs/vtigercrm/includes/runtime/../../layouts/vlayout/modules/Vtiger/ModalFooter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:737061155a0b482e737b39-59009807%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a3634283265eb83fc7eb36f798f6939b4eef345' => 
    array (
      0 => '/home/martin/lampstack-5.6.32-1/apache2/htdocs/vtigercrm/includes/runtime/../../layouts/vlayout/modules/Vtiger/ModalFooter.tpl',
      1 => 1468488064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '737061155a0b482e737b39-59009807',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5a0b482e76302',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0b482e76302')) {function content_5a0b482e76302($_smarty_tpl) {?>
<div class="modal-footer"><div class="pull-right cancelLinkContainer" style="margin-top:0px;"><a class="cancelLink" type="reset" data-dismiss="modal"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div><button class="btn btn-success" type="submit" name="saveButton"><strong><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></div><?php }} ?>
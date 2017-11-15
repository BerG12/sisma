<?php /* Smarty version Smarty-3.1.7, created on 2017-11-14 19:46:29
         compiled from "/home/martin/lampstack-5.6.32-1/apache2/htdocs/vtigercrm/includes/runtime/../../layouts/vlayout/modules/Settings/Vtiger/Announcement.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19923661845a0b4815784f71-97281635%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0f266ca19564313e761a103dbd79d0ca3728273' => 
    array (
      0 => '/home/martin/lampstack-5.6.32-1/apache2/htdocs/vtigercrm/includes/runtime/../../layouts/vlayout/modules/Settings/Vtiger/Announcement.tpl',
      1 => 1468488064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19923661845a0b4815784f71-97281635',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'ANNOUNCEMENT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5a0b48157e5f6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0b48157e5f6')) {function content_5a0b48157e5f6($_smarty_tpl) {?>
<div class="container-fluid" id="AnnouncementContainer"><div class="widget_header row-fluid"><div class="row-fluid"><h3><?php echo vtranslate('LBL_ANNOUNCEMENTS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3></div></div><hr><div class="contents row-fluid"><textarea class="announcementContent textarea-autosize boxSizingBorderBox" rows="3" placeholder="<?php echo vtranslate('LBL_ENTER_ANNOUNCEMENT_HERE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" style="width:100%"><?php echo $_smarty_tpl->tpl_vars['ANNOUNCEMENT']->value->get('announcement');?>
</textarea><div class="row-fluid textAlignCenter"><br><button class="btn btn-success saveAnnouncement hide"><strong><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div></div></div><?php }} ?>
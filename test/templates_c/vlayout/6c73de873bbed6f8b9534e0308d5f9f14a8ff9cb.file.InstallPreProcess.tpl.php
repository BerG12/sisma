<?php /* Smarty version Smarty-3.1.7, created on 2017-11-14 19:29:29
         compiled from "/home/martin/lampstack-5.6.32-1/apache2/htdocs/vtigercrm/includes/runtime/../../layouts/vlayout/modules/Install/InstallPreProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15387800965a0b4419e41722-20520397%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c73de873bbed6f8b9534e0308d5f9f14a8ff9cb' => 
    array (
      0 => '/home/martin/lampstack-5.6.32-1/apache2/htdocs/vtigercrm/includes/runtime/../../layouts/vlayout/modules/Install/InstallPreProcess.tpl',
      1 => 1468488064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15387800965a0b4419e41722-20520397',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5a0b4419e67d8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0b4419e67d8')) {function content_5a0b4419e67d8($_smarty_tpl) {?>
<input type="hidden" id="module" value="Install" />
<input type="hidden" id="view" value="Index" />
<div class="container-fluid page-container">
	<div class="row-fluid">
		<div class="span6">
			<div class="logo">
				<img src="<?php echo vimage_path('logo.png');?>
"/>
			</div>
		</div>
		<div class="span6">
			<div class="head pull-right">
				<h3><?php echo vtranslate('LBL_INSTALLATION_WIZARD','Install');?>
</h3>
			</div>
		</div>
	</div>
<?php }} ?>
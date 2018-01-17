<?php /* Smarty version Smarty-3.1.7, created on 2016-10-06 22:57:41
         compiled from "/var/lib/openshift/56a0faf389f5cf82c30001e5/app-root/runtime/repo/php/includes/runtime/../../layouts/vlayout/modules/MailManager/Mainui.tpl" */ ?>
<?php /*%%SmartyHeaderCode:40832105157f6d6e5371ef9-96460526%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d90ab8164fe4e3a1f134a4269798f694ea8640f' => 
    array (
      0 => '/var/lib/openshift/56a0faf389f5cf82c30001e5/app-root/runtime/repo/php/includes/runtime/../../layouts/vlayout/modules/MailManager/Mainui.tpl',
      1 => 1453409066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40832105157f6d6e5371ef9-96460526',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MAILBOX' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_57f6d6e538ca5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f6d6e538ca5')) {function content_57f6d6e538ca5($_smarty_tpl) {?>

<input type="hidden" name="refresh_timeout" id="refresh_timeout" value="<?php echo $_smarty_tpl->tpl_vars['MAILBOX']->value->refreshTimeOut();?>
"/><?php }} ?>
<?php /* Smarty version Smarty-3.1.7, created on 2016-01-26 15:58:32
         compiled from "/var/lib/openshift/56a0faf389f5cf82c30001e5/app-root/runtime/repo/php/includes/runtime/../../layouts/vlayout/modules/EmailTemplates/DetailViewFullContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:154068035556a797a8b76fe0-79452300%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76ca15e227e6f46edbe4ee982e49f977724119ad' => 
    array (
      0 => '/var/lib/openshift/56a0faf389f5cf82c30001e5/app-root/runtime/repo/php/includes/runtime/../../layouts/vlayout/modules/EmailTemplates/DetailViewFullContents.tpl',
      1 => 1453409071,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '154068035556a797a8b76fe0-79452300',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'USER_MODEL' => 0,
    'MODULE_NAME' => 0,
    'RECORD' => 0,
    'WIDTHTYPE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_56a797a8c9451',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a797a8c9451')) {function content_56a797a8c9451($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['WIDTHTYPE'] = new Smarty_variable($_smarty_tpl->tpl_vars['USER_MODEL']->value->get('rowheight'), null, 0);?><table class="table table-bordered detailview-table"><thead><tr><th class="blockHeader" colspan="4"><?php echo vtranslate('Email Template - Properties of ',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 " <?php echo decode_html($_smarty_tpl->tpl_vars['RECORD']->value->get('templatename'));?>
 "</th></tr></thead><tbody<tr><td class="fieldLabel <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><label class="muted marginRight10px"><?php echo vtranslate('Templatename',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</label></td><td class="fieldValue <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><?php echo decode_html($_smarty_tpl->tpl_vars['RECORD']->value->get('templatename'));?>
</td></tr><tr><td class="fieldLabel <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><label class="muted marginRight10px"><?php echo vtranslate('Description',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</label></td><td class="fieldValue <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><?php echo decode_html($_smarty_tpl->tpl_vars['RECORD']->value->get('description'));?>
</td></tr><tr><td class="fieldLabel <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><label class="muted marginRight10px"><?php echo vtranslate('Subject',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</label></td><td class="fieldValue <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><?php echo decode_html($_smarty_tpl->tpl_vars['RECORD']->value->get('subject'));?>
</td></tr><tr><td class="fieldLabel <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><label class="muted marginRight10px"><?php echo vtranslate('Message',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</label></td><td class="fieldValue <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><?php echo decode_html($_smarty_tpl->tpl_vars['RECORD']->value->get('body'));?>
</td></tr></tbody></table><?php }} ?>
<?php /* Smarty version Smarty-3.1.7, created on 2016-02-12 17:56:58
         compiled from "/var/lib/openshift/56a0faf389f5cf82c30001e5/app-root/runtime/repo/php/includes/runtime/../../layouts/vlayout/modules/Google/map.tpl" */ ?>
<?php /*%%SmartyHeaderCode:70126607956be1ceac52940-46940166%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba3dc516b14842f023552440c2bec0d238590642' => 
    array (
      0 => '/var/lib/openshift/56a0faf389f5cf82c30001e5/app-root/runtime/repo/php/includes/runtime/../../layouts/vlayout/modules/Google/map.tpl',
      1 => 1453409077,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70126607956be1ceac52940-46940166',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RECORD' => 0,
    'SOURCE_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_56be1ceacc17a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56be1ceacc17a')) {function content_56be1ceacc17a($_smarty_tpl) {?>
<script type="text/javascript" src="layouts/vlayout/modules/Google/resources/map.js"></script>

<span id="map_record" class="hide"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value;?>
</span>
<span id="map_module" class="hide"><?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
</span>
<div id="map_canvas">
    <span id="map_address" class="hide"></span>
    <img id="map_link" class="pull-right icon-share cursorPointer"></img>
</div>

<?php }} ?>
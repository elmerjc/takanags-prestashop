<?php /* Smarty version Smarty-3.1.19, created on 2017-07-03 00:39:07
         compiled from "module:ttcmsservices/views/templates/hook/ttcmsservices.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15726912155959d87b804168-14669793%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '367a89073e01aa8454b56e4552c4c95025092597' => 
    array (
      0 => 'module:ttcmsservices/views/templates/hook/ttcmsservices.tpl',
      1 => 1499052149,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '15726912155959d87b804168-14669793',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'cms_infos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5959d87b80b436_21796414',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5959d87b80b436_21796414')) {function content_5959d87b80b436_21796414($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name']=='index') {?>
<div id="ttcmsservices">
  <?php echo $_smarty_tpl->tpl_vars['cms_infos']->value['text'];?>

</div>
<?php }?><?php }} ?>

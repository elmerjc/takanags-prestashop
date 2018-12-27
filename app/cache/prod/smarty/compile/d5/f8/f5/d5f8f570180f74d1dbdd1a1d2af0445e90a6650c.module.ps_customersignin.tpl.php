<?php /* Smarty version Smarty-3.1.19, created on 2017-07-03 00:39:07
         compiled from "module:ps_customersignin/ps_customersignin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19536319545959d87b7426c4-19346554%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5f8f570180f74d1dbdd1a1d2af0445e90a6650c' => 
    array (
      0 => 'module:ps_customersignin/ps_customersignin.tpl',
      1 => 1499052150,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '19536319545959d87b7426c4-19346554',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logged' => 0,
    'logout_url' => 0,
    'my_account_url' => 0,
    'customerName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5959d87b754272_47487243',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5959d87b754272_47487243')) {function content_5959d87b754272_47487243($_smarty_tpl) {?><div id="_desktop_user_info">
<div class="ttuserheading"></div>	
  <ul class="user-info">
    <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
      <li><a
        class="logout hidden-sm-down"
        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logout_url']->value, ENT_QUOTES, 'UTF-8');?>
"
        rel="nofollow"
      >
        <i class="material-icons user">&#xE7FF;</i>
          <span class="hidden-sm-down"><?php echo smartyTranslate(array('s'=>'Sign out','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</span>
      </a></li>
      <li><a
        class="account"
        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"
        title="<?php echo smartyTranslate(array('s'=>'View my customer account','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl);?>
"
        rel="nofollow"
      >
        <i class="material-icons hidden-md-up logged">&#xE7FF;</i>
        <span class="hidden-sm-down"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customerName']->value, ENT_QUOTES, 'UTF-8');?>
</span>
      </a></li>
    <?php } else { ?>
      <li><a
        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"
        title="<?php echo smartyTranslate(array('s'=>'Log in to your customer account','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl);?>
"
        rel="nofollow"
      >
        <i class="material-icons user">&#xE7FF;</i>
        <span class="hidden-sm-down"><?php echo smartyTranslate(array('s'=>'Sign in','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</span>
      </a></li>
    <?php }?>
  </ul>
</div><?php }} ?>

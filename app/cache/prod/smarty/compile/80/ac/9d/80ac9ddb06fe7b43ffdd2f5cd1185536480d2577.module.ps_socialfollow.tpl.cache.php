<?php /* Smarty version Smarty-3.1.19, created on 2017-07-03 00:39:07
         compiled from "module:ps_socialfollow/ps_socialfollow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9808090335959d87b960619-89159104%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80ac9ddb06fe7b43ffdd2f5cd1185536480d2577' => 
    array (
      0 => 'module:ps_socialfollow/ps_socialfollow.tpl',
      1 => 1499052150,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '9808090335959d87b960619-89159104',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'social_links' => 0,
    'social_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5959d87b96e632_36193564',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5959d87b96e632_36193564')) {function content_5959d87b96e632_36193564($_smarty_tpl) {?>


  <div class="block-social links col-lg-4 col-md-12 col-sm-12">
  <div  class="title clearfix hidden-md-up" data-toggle="collapse" data-target="#social-footer">
  	<span class="h3"><?php echo smartyTranslate(array('s'=>'social'),$_smarty_tpl);?>
</span>
	<span class="pull-xs-right">
          <span class="navbar-toggler collapse-icons">
            <i class="material-icons add">&#xE313;</i>
            <i class="material-icons remove">&#xE316;</i>
          </span>
	</span>
  </div>
    <ul id="social-footer" class="collapse">
      <?php  $_smarty_tpl->tpl_vars['social_link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['social_link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['social_links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['social_link']->key => $_smarty_tpl->tpl_vars['social_link']->value) {
$_smarty_tpl->tpl_vars['social_link']->_loop = true;
?>
        <li class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_link']->value['class'], ENT_QUOTES, 'UTF-8');?>
"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_link']->value['url'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_link']->value['label'], ENT_QUOTES, 'UTF-8');?>
</p></a></li>
      <?php } ?>
    </ul>
  </div>

<?php }} ?>

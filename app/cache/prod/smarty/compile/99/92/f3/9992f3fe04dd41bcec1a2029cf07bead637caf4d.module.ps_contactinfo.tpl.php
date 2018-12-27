<?php /* Smarty version Smarty-3.1.19, created on 2017-07-03 00:39:07
         compiled from "module:ps_contactinfo/ps_contactinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18360222915959d87b936ba8-68638774%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9992f3fe04dd41bcec1a2029cf07bead637caf4d' => 
    array (
      0 => 'module:ps_contactinfo/ps_contactinfo.tpl',
      1 => 1499052150,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '18360222915959d87b936ba8-68638774',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'contact_infos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5959d87b9543b5_91187907',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5959d87b9543b5_91187907')) {function content_5959d87b9543b5_91187907($_smarty_tpl) {?>

<div class="contact-rich links col-md-3">
  <h4 class="hidden-sm-down"><?php echo smartyTranslate(array('s'=>'Store information','d'=>'Shop.Theme'),$_smarty_tpl);?>
</h4>
  <div  class="title clearfix hidden-md-up" data-toggle="collapse" data-target="#contact-footer">
  	<span class="h3"><?php echo smartyTranslate(array('s'=>'Store information','d'=>'Shop.Theme'),$_smarty_tpl);?>
</span>
	 <span class="pull-xs-right">
          <span class="navbar-toggler collapse-icons">
            <i class="material-icons add">&#xE313;</i>
            <i class="material-icons remove">&#xE316;</i>
          </span>
	</span>
  </div>
  <ul id="contact-footer" class="collapse">
  <li class="block">
    <div class="icon"><i class="material-icons">&#xE55F;</i></div>
    <div class="data address"><?php echo $_smarty_tpl->tpl_vars['contact_infos']->value['address']['formatted'];?>
</div>
  </li>
  <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']) {?>
    <li class="block">
      <div class="icon"><i class="material-icons">&#xE0CD;</i></div>
      <div class="data contact">
        <?php echo smartyTranslate(array('s'=>'Call us:','d'=>'Shop.Theme'),$_smarty_tpl);?>
<br/>
       </div>
	   <a href="tel:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_infos']->value['phone'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_infos']->value['phone'], ENT_QUOTES, 'UTF-8');?>
</a>
    </li>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['fax']) {?>
    <hr/>
    <li class="block">
      <div class="icon"><i class="material-icons">&#xE0DF;</i></div>
      <div class="data fax">
        <?php echo smartyTranslate(array('s'=>'Fax:','d'=>'Shop.Theme'),$_smarty_tpl);?>
<br/>
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_infos']->value['fax'], ENT_QUOTES, 'UTF-8');?>

      </div>
    </li>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['email']) {?>
    <li class="block">
      <div class="icon"><i class="material-icons">&#xE158;</i></div>
      <div class="data email">
        <?php echo smartyTranslate(array('s'=>'Email us:','d'=>'Shop.Theme'),$_smarty_tpl);?>
<br/>
       </div>
       <a href="mailto:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_infos']->value['email'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_infos']->value['email'], ENT_QUOTES, 'UTF-8');?>
</a>
    </li>
  <?php }?>
  </ul>
</div>
<?php }} ?>

<?php /* Smarty version Smarty-3.1.19, created on 2017-11-12 21:35:59
         compiled from "module:ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1996715295959d87b894059-53913132%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '307dc6bd4724d29d1572cc301dd7148e962604ef' => 
    array (
      0 => 'module:ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl',
      1 => 1510540458,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '1996715295959d87b894059-53913132',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5959d87b8aad04_47418524',
  'variables' => 
  array (
    'urls' => 0,
    'value' => 0,
    'conditions' => 0,
    'msg' => 0,
    'nw_error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5959d87b8aad04_47418524')) {function content_5959d87b8aad04_47418524($_smarty_tpl) {?>
<div id="newslatter" class="col-sm-12">
<div class="block_newsletter">
  <div class="row">
  	<div class="tt-content col-sm-7">
    <h1 class="tt-title"><?php echo smartyTranslate(array('s'=>'Regístrese para recibir novedades'),$_smarty_tpl);?>
</h1>
	<div class="tt-desc">Regístrese con nosotros y obtenga las últimas ofertas, y novedades sobre la tienda.</div>
	</div>
    <div class="block_content col-sm-5">
      <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
#footer" method="post">
        <div class="row">
          <div class="ttinput_newsletter">
            <input
              class="btn btn-primary pull-xs-right hidden-xs-down"
              name="submitNewsletter"
              type="submit"
              value="<?php echo smartyTranslate(array('s'=>'Subscribe','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
"
            >
            <input
              class="btn btn-primary pull-xs-right hidden-sm-up"
              name="submitNewsletter"
              type="submit"
              value="<?php echo smartyTranslate(array('s'=>'OK','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
"
            >
            <div class="input-wrapper">
              <input
                name="email"
                type="text"
                value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
                placeholder="<?php echo smartyTranslate(array('s'=>'Your email address','d'=>'Shop.Forms.Labels'),$_smarty_tpl);?>
"
              >
            </div>
            <input type="hidden" name="action" value="0">
            <div class="clearfix"></div>
          </div>
          <div class="col-xs-12">
              <?php if ($_smarty_tpl->tpl_vars['conditions']->value) {?>
                <p class="newsletter-desc"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['conditions']->value, ENT_QUOTES, 'UTF-8');?>
</p>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['msg']->value) {?>
                <p class="alert <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>alert-danger<?php } else { ?>alert-success<?php }?>">
                  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['msg']->value, ENT_QUOTES, 'UTF-8');?>

                </p>
              <?php }?>
          </div>
        </div>
      </form>
    </div>
  </div>
  </div>
</div><?php }} ?>

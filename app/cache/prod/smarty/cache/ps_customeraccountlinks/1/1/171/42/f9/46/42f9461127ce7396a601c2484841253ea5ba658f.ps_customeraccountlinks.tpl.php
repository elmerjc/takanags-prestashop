<?php /*%%SmartyHeaderCode:5614940655959d87b917906-28487711%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:ps_customeraccountlinks/ps_customeraccountlinks.tpl',
      1 => 1499052150,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '5614940655959d87b917906-28487711',
  'variables' => 
  array (
    'urls' => 0,
    'my_account_urls' => 0,
    'my_account_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5959d87b92cbb6_87542799',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5959d87b92cbb6_87542799')) {function content_5959d87b92cbb6_87542799($_smarty_tpl) {?>
<div id="block_myaccount_infos" class="col-md-3 links">
  <h3 class="myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="http://takanags.com/index.php?controller=my-account" rel="nofollow">
      Your account
    </a>
  </h3>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">Your account</span>
    <span class="pull-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li>
          <a href="http://takanags.com/index.php?controller=addresses" title="Direcciones" rel="nofollow">
            Direcciones
          </a>
        </li>
            <li>
          <a href="http://takanags.com/index.php?controller=order-slip" title="Facturas por abono" rel="nofollow">
            Facturas por abono
          </a>
        </li>
            <li>
          <a href="http://takanags.com/index.php?controller=identity" title="Información personal" rel="nofollow">
            Información personal
          </a>
        </li>
            <li>
          <a href="http://takanags.com/index.php?controller=history" title="Pedidos" rel="nofollow">
            Pedidos
          </a>
        </li>
        
	</ul>
</div>
<?php }} ?>

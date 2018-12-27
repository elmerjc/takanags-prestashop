<?php /* Smarty version Smarty-3.1.19, created on 2017-11-11 13:31:33
         compiled from "/var/www/takanags.com/public_html/modules/dashgoals/views/templates/hook/config.tpl" */ ?>
<?php /*%%SmartyHeaderCode:445740885a074205ddac35-14821069%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10d65da74a8ddc2b6462a6f57a65711b5cc45e57' => 
    array (
      0 => '/var/www/takanags.com/public_html/modules/dashgoals/views/templates/hook/config.tpl',
      1 => 1499040043,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '445740885a074205ddac35-14821069',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'goals_year' => 0,
    'goals_months' => 0,
    'month' => 0,
    'currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a074205e13e15_10503470',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a074205e13e15_10503470')) {function content_5a074205e13e15_10503470($_smarty_tpl) {?>
<section id="dashgoals_config" class="dash_config hide">
	<header><i class="icon-wrench"></i> <?php echo smartyTranslate(array('s'=>'Configuration','d'=>'Admin.Global'),$_smarty_tpl);?>
</header>
	<form class="defaultForm form-horizontal" method="post" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminDashboard'),'html','UTF-8');?>
">
		<table class="table table-condensed table-striped table-bordered">
			<thead>
				<tr>
					<th class="fixed-width-md"><?php echo $_smarty_tpl->tpl_vars['goals_year']->value;?>
</th>
					<th class="fixed-width-md"><?php echo smartyTranslate(array('s'=>'Traffic','d'=>'Modules.Dashgoals.Admin'),$_smarty_tpl);?>
</th>
					<th class="fixed-width-md"><?php echo smartyTranslate(array('s'=>'Conversion Rate','d'=>'Modules.Dashgoals.Admin'),$_smarty_tpl);?>
</th>
					<th class="fixed-width-lg"><?php echo smartyTranslate(array('s'=>'Average Cart Value','d'=>'Modules.Dashgoals.Admin'),$_smarty_tpl);?>
</th>
					<th><?php echo smartyTranslate(array('s'=>'Sales','d'=>'Admin.Global'),$_smarty_tpl);?>
</th>
				</tr>
			</thead>
			<tbody>
				<?php  $_smarty_tpl->tpl_vars['month'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['month']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goals_months']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['month']->key => $_smarty_tpl->tpl_vars['month']->value) {
$_smarty_tpl->tpl_vars['month']->_loop = true;
?>
				<tr>
					<td>
						<?php echo $_smarty_tpl->tpl_vars['month']->value['label'];?>

					</td>
					<td>
						<div class="input-group">
							<input id="dashgoals_traffic_<?php echo $_smarty_tpl->tpl_vars['month']->key;?>
" name="dashgoals_traffic_<?php echo $_smarty_tpl->tpl_vars['month']->key;?>
" class="dashgoals_config_input form-control"
								value="<?php echo intval($_smarty_tpl->tpl_vars['month']->value['values']['traffic']);?>
" />
						</div>
					</td>
					<td>
						<div class="input-group">
							<input id="dashgoals_conversion_<?php echo $_smarty_tpl->tpl_vars['month']->key;?>
" name="dashgoals_conversion_<?php echo $_smarty_tpl->tpl_vars['month']->key;?>
" class="dashgoals_config_input form-control"
								value="<?php echo floatval($_smarty_tpl->tpl_vars['month']->value['values']['conversion']);?>
" />
							<span class="input-group-addon">%</span>
						</div>
					</td>
					<td>
						<div class="input-group">
							<span class="input-group-addon"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['currency']->value->iso_code);?>
</span>
							<input id="dashgoals_avg_cart_value_<?php echo $_smarty_tpl->tpl_vars['month']->key;?>
" name="dashgoals_avg_cart_value_<?php echo $_smarty_tpl->tpl_vars['month']->key;?>
" class="dashgoals_config_input form-control"
								value="<?php echo intval($_smarty_tpl->tpl_vars['month']->value['values']['avg_cart_value']);?>
" />
						</div>
					</td>
					<td id="dashgoals_sales_<?php echo $_smarty_tpl->tpl_vars['month']->key;?>
" class="dashgoals_sales">
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
		<div class="panel-footer">
			<button class="btn btn-default pull-right" name="submitDashGoals" type="submit"><i class="process-icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save','d'=>'Admin.Actions'),$_smarty_tpl);?>
</button>
		</div>
	</form>
</section>
<?php }} ?>

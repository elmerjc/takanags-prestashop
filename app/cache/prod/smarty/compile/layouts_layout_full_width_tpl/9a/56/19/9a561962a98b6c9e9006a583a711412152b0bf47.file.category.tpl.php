<?php /* Smarty version Smarty-3.1.19, created on 2018-03-25 13:52:10
         compiled from "/var/www/takanags.com/public_html/themes/PRS01/templates/cms/category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6230240945ab7efda5e75f1-07272808%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a561962a98b6c9e9006a583a711412152b0bf47' => 
    array (
      0 => '/var/www/takanags.com/public_html/themes/PRS01/templates/cms/category.tpl',
      1 => 1499052150,
      2 => 'file',
    ),
    'ec0885e3d22eb8f2d9a18f29108183f65bba95c0' => 
    array (
      0 => '/var/www/takanags.com/public_html/themes/PRS01/templates/page.tpl',
      1 => 1510544396,
      2 => 'file',
    ),
    'd64d284926275459ca53c4a5a3a038e725ad49c3' => 
    array (
      0 => '/var/www/takanags.com/public_html/themes/PRS01/templates/layouts/layout-full-width.tpl',
      1 => 1499052150,
      2 => 'file',
    ),
    '54d039074aa76ca6a773902f21c432aac418f8c5' => 
    array (
      0 => '/var/www/takanags.com/public_html/themes/PRS01/templates/layouts/layout-both-columns.tpl',
      1 => 1499052150,
      2 => 'file',
    ),
    'f3201a38acee5a66bf620cfc438d58be1024854f' => 
    array (
      0 => '/var/www/takanags.com/public_html/themes/PRS01/templates/_partials/stylesheets.tpl',
      1 => 1499052150,
      2 => 'file',
    ),
    'dc9d68fe3a4cefd3f1c589500859b5de5c955a6f' => 
    array (
      0 => '/var/www/takanags.com/public_html/themes/PRS01/templates/_partials/javascript.tpl',
      1 => 1499052150,
      2 => 'file',
    ),
    'cad76be8bb00e93b712d67871a6a30f7babdd029' => 
    array (
      0 => '/var/www/takanags.com/public_html/themes/PRS01/templates/_partials/head.tpl',
      1 => 1499052150,
      2 => 'file',
    ),
    '0b4be873c6ea5ca79dbae1e99f144fb255b06567' => 
    array (
      0 => '/var/www/takanags.com/public_html/themes/PRS01/templates/catalog/_partials/product-activation.tpl',
      1 => 1499052149,
      2 => 'file',
    ),
    '993c22286fbf4a28e83585af065083fa7deb893a' => 
    array (
      0 => '/var/www/takanags.com/public_html/themes/PRS01/templates/_partials/header.tpl',
      1 => 1499052150,
      2 => 'file',
    ),
    'c809d0aa6333258faaf29630083a05d67af01116' => 
    array (
      0 => '/var/www/takanags.com/public_html/themes/PRS01/templates/_partials/notifications.tpl',
      1 => 1510544452,
      2 => 'file',
    ),
    '7da717e54b54a546b7cfe2ec498f1bd3da2b77a8' => 
    array (
      0 => '/var/www/takanags.com/public_html/themes/PRS01/templates/_partials/breadcrumb.tpl',
      1 => 1499052150,
      2 => 'file',
    ),
    'a37638d66f123dc8491f1e6df8266561f1b544d7' => 
    array (
      0 => '/var/www/takanags.com/public_html/themes/PRS01/templates/_partials/footer.tpl',
      1 => 1510543222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6230240945ab7efda5e75f1-07272808',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'layout' => 0,
    'language' => 0,
    'page' => 0,
    'javascript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ab7efda88f5b4_01003832',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab7efda88f5b4_01003832')) {function content_5ab7efda88f5b4_01003832($_smarty_tpl) {?><!doctype html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">

  <head>
    
      <?php /*  Call merged included template "_partials/head.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6230240945ab7efda5e75f1-07272808');
content_5ab7efda66da43_00296198($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/head.tpl" */?>
    
  </head>

  <body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['classnames'][0][0]->smartyClassnames($_smarty_tpl->tpl_vars['page']->value['body_classes']), ENT_QUOTES, 'UTF-8');?>
">

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl);?>


    <main>
      
        <?php /*  Call merged included template "catalog/_partials/product-activation.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6230240945ab7efda5e75f1-07272808');
content_5ab7efda6fe325_56057879($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/product-activation.tpl" */?>
      
      <header id="header">
        
          <?php /*  Call merged included template "_partials/header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6230240945ab7efda5e75f1-07272808');
content_5ab7efda70ec05_81903399($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/header.tpl" */?>
        
      </header>
      
        <?php /*  Call merged included template "_partials/notifications.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6230240945ab7efda5e75f1-07272808');
content_5ab7efda730697_66229790($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/notifications.tpl" */?>
      
      <section id="wrapper">
	  	
            <?php /*  Call merged included template "_partials/breadcrumb.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6230240945ab7efda5e75f1-07272808');
content_5ab7efda75fec5_49749643($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/breadcrumb.tpl" */?>
          
        <div class="<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name']=='index') {?>full-container<?php } else { ?>container<?php }?>">
          

          
  <div id="content-wrapper">
    

  <section id="main" style="background-color: #000">

    
      
        <header class="page-header">
          <h1 class="tt-innerpagetitle">
  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms_category']->value['name'], ENT_QUOTES, 'UTF-8');?>

</h1>
        </header>
      
    

    
      <section id="content" class="page-content card card-block">
        

        
  
    <?php if ($_smarty_tpl->tpl_vars['sub_categories']->value) {?>
      <p><?php echo smartyTranslate(array('s'=>'List of sub categories in %name%:','d'=>'Shop.Theme','sprintf'=>array('%name%'=>$_smarty_tpl->tpl_vars['cms_category']->value['name'])),$_smarty_tpl);?>
</p>
      <ul>
        <?php  $_smarty_tpl->tpl_vars['sub_category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sub_category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sub_categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sub_category']->key => $_smarty_tpl->tpl_vars['sub_category']->value) {
$_smarty_tpl->tpl_vars['sub_category']->_loop = true;
?>
          <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sub_category']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sub_category']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></li>
        <?php } ?>
      </ul>
    <?php }?>
  

  
    <?php if ($_smarty_tpl->tpl_vars['cms_pages']->value) {?>
      <p><?php echo smartyTranslate(array('s'=>'List of pages in %name%:','d'=>'Shop.Theme','sprintf'=>array('%name%'=>$_smarty_tpl->tpl_vars['cms_category']->value['name'])),$_smarty_tpl);?>
</p>
      <ul>
        <?php  $_smarty_tpl->tpl_vars['cms_page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cms_page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cms_pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cms_page']->key => $_smarty_tpl->tpl_vars['cms_page']->value) {
$_smarty_tpl->tpl_vars['cms_page']->_loop = true;
?>
          <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms_page']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms_page']->value['meta_title'], ENT_QUOTES, 'UTF-8');?>
</a></li>
        <?php } ?>
      </ul>
    <?php }?>
  

      </section>
    

    
      <footer class="page-footer">
        
          <!-- Footer content -->
        
      </footer>
    

  </section>


  </div>


          
		</div>
      </section>

      <footer id="footer">
        
          <?php /*  Call merged included template "_partials/footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6230240945ab7efda5e75f1-07272808');
content_5ab7efda876374_19583448($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/footer.tpl" */?>
        
      </footer>

    </main>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl);?>


    
      <?php /*  Call merged included template "_partials/javascript.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, '6230240945ab7efda5e75f1-07272808');
content_5ab7efda6c2149_04963615($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/javascript.tpl" */?>
    

  </body>

</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-03-25 13:52:10
         compiled from "/var/www/takanags.com/public_html/themes/PRS01/templates/_partials/head.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5ab7efda66da43_00296198')) {function content_5ab7efda66da43_00296198($_smarty_tpl) {?><meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">


  <title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
</title>
  <meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');?>
">
  <meta name="keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['keywords'], ENT_QUOTES, 'UTF-8');?>
">
  <?php if ($_smarty_tpl->tpl_vars['page']->value['meta']['robots']!=='index') {?>
    <meta name="robots" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['robots'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['page']->value['canonical']) {?>
    <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['canonical'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>


<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- TemplateTrip theme google font-->

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700" rel="stylesheet"> 

<!-- TemplateTrip theme google font-->

<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">
<link rel="shortcut icon" type="image/x-icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">


  <?php /*  Call merged included template "_partials/stylesheets.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('stylesheets'=>$_smarty_tpl->tpl_vars['stylesheets']->value), 0, '6230240945ab7efda5e75f1-07272808');
content_5ab7efda69fcf4_82794435($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/stylesheets.tpl" */?>



  <?php /*  Call merged included template "_partials/javascript.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['head'],'vars'=>$_smarty_tpl->tpl_vars['js_custom_vars']->value), 0, '6230240945ab7efda5e75f1-07272808');
content_5ab7efda6c2149_04963615($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/javascript.tpl" */?>



  <?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>


<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-03-25 13:52:10
         compiled from "/var/www/takanags.com/public_html/themes/PRS01/templates/_partials/stylesheets.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5ab7efda69fcf4_82794435')) {function content_5ab7efda69fcf4_82794435($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['stylesheet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stylesheet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stylesheets']->value['external']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->key => $_smarty_tpl->tpl_vars['stylesheet']->value) {
$_smarty_tpl->tpl_vars['stylesheet']->_loop = true;
?>
  <link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['uri'], ENT_QUOTES, 'UTF-8');?>
" type="text/css" media="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['media'], ENT_QUOTES, 'UTF-8');?>
">
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['stylesheet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stylesheet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stylesheets']->value['inline']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->key => $_smarty_tpl->tpl_vars['stylesheet']->value) {
$_smarty_tpl->tpl_vars['stylesheet']->_loop = true;
?>
  <style>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['content'], ENT_QUOTES, 'UTF-8');?>

  </style>
<?php } ?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-03-25 13:52:10
         compiled from "/var/www/takanags.com/public_html/themes/PRS01/templates/_partials/javascript.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5ab7efda6c2149_04963615')) {function content_5ab7efda6c2149_04963615($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['javascript']->value['external']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
  <script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js']->value['uri'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js']->value['attribute'], ENT_QUOTES, 'UTF-8');?>
></script>
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['javascript']->value['inline']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
  <script type="text/javascript">
    <?php echo $_smarty_tpl->tpl_vars['js']->value['content'];?>

  </script>
<?php } ?>

<?php if (isset($_smarty_tpl->tpl_vars['vars']->value)&&count($_smarty_tpl->tpl_vars['vars']->value)) {?>
  <script type="text/javascript">
    <?php  $_smarty_tpl->tpl_vars['var_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['var_value']->_loop = false;
 $_smarty_tpl->tpl_vars['var_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['vars']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['var_value']->key => $_smarty_tpl->tpl_vars['var_value']->value) {
$_smarty_tpl->tpl_vars['var_value']->_loop = true;
 $_smarty_tpl->tpl_vars['var_name']->value = $_smarty_tpl->tpl_vars['var_value']->key;
?>
    var <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
 = <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['json_encode'][0][0]->jsonEncode($_smarty_tpl->tpl_vars['var_value']->value);?>
;
    <?php } ?>
  </script>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-03-25 13:52:10
         compiled from "/var/www/takanags.com/public_html/themes/PRS01/templates/catalog/_partials/product-activation.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5ab7efda6fe325_56057879')) {function content_5ab7efda6fe325_56057879($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['page']->value['admin_notifications']) {?>
  <div class="alert alert-warning row" role="alert">
    <div class="container">
      <div class="row">
        <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value['admin_notifications']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
          <div class="col-sm-12">
            <i class="material-icons pull-xs-left">&#xE001;</i>
            <p class="alert-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value['message'], ENT_QUOTES, 'UTF-8');?>
</p>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-03-25 13:52:10
         compiled from "/var/www/takanags.com/public_html/themes/PRS01/templates/_partials/header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5ab7efda70ec05_81903399')) {function content_5ab7efda70ec05_81903399($_smarty_tpl) {?><div class="full-header">

  <nav class="header-nav col-sm-3">
    <div class="container">
        <div class="row">
          <div class="hidden-sm-down top-nav">
            <div class="col-md-5 col-xs-12">
              <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayNav1'),$_smarty_tpl);?>

            </div>
            <div class="col-md-7 right-nav">
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayNav2'),$_smarty_tpl);?>

            </div>
          </div>
          <div class="hidden-md-up text-xs-center mobile">
            <div class="pull-xs-left" id="menu-icon">
              <i class="material-icons">&#xE5D2;</i>
            </div>
            <div class="pull-xs-right" id="_mobile_cart"></div>
            <div class="pull-xs-right" id="_mobile_user_info"></div>
            <div class="top-logo" id="_mobile_logo"></div>
            <div class="clearfix"></div>
          </div>
        </div>
    </div>
  </nav>



  <div class="header-top col-sm-2">
    <div class="container">
       <div class="row">
        <div class="col-md-2 hidden-sm-down" id="_desktop_logo">
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
            <img class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
          </a>
        </div>
      </div>
      <div id="mobile_top_menu_wrapper" class="row hidden-md-up" style="display:none;">
        <div class="js-top-menu mobile" id="_mobile_top_menu"></div>
        <div class="js-top-menu-bottom">
          <div id="_mobile_currency_selector"></div>
          <div id="_mobile_language_selector"></div>
          <div id="_mobile_contact_link"></div>
        </div>
      </div>
    </div>
	
  </div>
  <div class="col-md-7 col-sm-7 position-static">
	  <div class="row">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayTop'),$_smarty_tpl);?>

		<div class="clearfix"></div>
	  </div>
	</div>
  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayNavFullWidth'),$_smarty_tpl);?>


</div>
<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name']=='index') {?>
	
		<div id="top_column" class="">
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayTopColumn'),$_smarty_tpl);?>

		 </div>
	
<?php }?><?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-03-25 13:52:10
         compiled from "/var/www/takanags.com/public_html/themes/PRS01/templates/_partials/notifications.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5ab7efda730697_66229790')) {function content_5ab7efda730697_66229790($_smarty_tpl) {?>
<aside id="notifications" style="background-color: #000">
  <div class="container">
    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['error']) {?>
      <article class="alert alert-danger" role="alert" data-alert="danger">
        <ul>
          <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['error']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
            <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value, ENT_QUOTES, 'UTF-8');?>
</li>
          <?php } ?>
        </ul>
      </article>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['warning']) {?>
      <article class="alert alert-warning" role="alert" data-alert="warning">
        <ul>
          <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['warning']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
            <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value, ENT_QUOTES, 'UTF-8');?>
</li>
          <?php } ?>
        </ul>
      </article>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['success']) {?>
      <article class="alert alert-success" role="alert" data-alert="success">
        <ul>
          <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['success']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
            <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value, ENT_QUOTES, 'UTF-8');?>
</li>
          <?php } ?>
        </ul>
      </article>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['info']) {?>
      <article class="alert alert-info" role="alert" data-alert="info">
        <ul>
          <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
            <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value, ENT_QUOTES, 'UTF-8');?>
</li>
          <?php } ?>
        </ul>
      </article>
    <?php }?>
  </div>
</aside>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-03-25 13:52:10
         compiled from "/var/www/takanags.com/public_html/themes/PRS01/templates/_partials/breadcrumb.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5ab7efda75fec5_49749643')) {function content_5ab7efda75fec5_49749643($_smarty_tpl) {?><nav data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['count'], ENT_QUOTES, 'UTF-8');?>
" class="breadcrumb hidden-sm-down">
  <ol itemscope itemtype="http://schema.org/BreadcrumbList">
    <?php  $_smarty_tpl->tpl_vars['path'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['path']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['breadcrumb']->value['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumb']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['path']->key => $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['path']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumb']['iteration']++;
?>
      <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
          <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
        </a>
        <meta itemprop="position" content="<?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['foreach']['breadcrumb']['iteration'], ENT_QUOTES, 'UTF-8');?>
">
      </li>
    <?php } ?>
  </ol>
</nav>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-03-25 13:52:10
         compiled from "/var/www/takanags.com/public_html/themes/PRS01/templates/_partials/footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5ab7efda876374_19583448')) {function content_5ab7efda876374_19583448($_smarty_tpl) {?><div class="footer-top">
	<div class="container">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooterBefore'),$_smarty_tpl);?>

	</div>
</div>
<div class="footer-container">
  <div class="container">
    <div class="row">
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooter'),$_smarty_tpl);?>

    </div>
    <div class="row">
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooterAfter'),$_smarty_tpl);?>

    </div>
  </div>
</div>
<div class="bottom-footer">
	<div class="container">
	  <div class="col-md-12">
		<p>
			<?php echo smartyTranslate(array('s'=>'%copyright% %year% - %prestashop%','sprintf'=>array('%prestashop%'=>'Takana Gaming Store','%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme'),$_smarty_tpl);?>

		</p>
	  </div>
	</div>
</div>
<a href="#" id="goToTop" title="Back to top"> <i class="material-icons arrow-up">&#xE316;</i></a><?php }} ?>

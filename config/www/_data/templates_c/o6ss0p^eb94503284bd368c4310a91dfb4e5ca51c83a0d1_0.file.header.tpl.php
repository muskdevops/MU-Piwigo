<?php
/* Smarty version 4.3.1, created on 2024-06-24 11:37:31
  from '/app/www/public/themes/default/template/mail/text/html/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66795a7bcf1a80_13996565',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb94503284bd368c4310a91dfb4e5ca51c83a0d1' => 
    array (
      0 => '/app/www/public/themes/default/template/mail/text/html/header.tpl',
      1 => 1719070178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66795a7bcf1a80_13996565 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="<?php echo $_smarty_tpl->tpl_vars['lang_info']->value['code'];?>
" dir="<?php echo $_smarty_tpl->tpl_vars['lang_info']->value['direction'];?>
">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['CONTENT_ENCODING']->value;?>
"/>
    <title>Piwigo Mail</title>

    <style type="text/css">
    <?php if ((isset($_smarty_tpl->tpl_vars['GLOBAL_MAIL_CSS']->value))) {
echo $_smarty_tpl->tpl_vars['GLOBAL_MAIL_CSS']->value;
}?>
    <?php if ((isset($_smarty_tpl->tpl_vars['MAIL_CSS']->value))) {
echo $_smarty_tpl->tpl_vars['MAIL_CSS']->value;
}?>
    </style>
  </head>

  <body>
    <table id="bodyTable" cellspacing="0" cellpadding="10" border="0">
      <tr><td align="center" valign="top">

        <table id="contentTable" cellspacing="0" cellpadding="0" border="0">
          <tr><td id="header">
                        <div id="title"><?php echo $_smarty_tpl->tpl_vars['MAIL_TITLE']->value;?>
</div>
            <?php if (!empty($_smarty_tpl->tpl_vars['MAIL_SUBTITLE']->value)) {?><div id="subtitle"><?php echo $_smarty_tpl->tpl_vars['MAIL_SUBTITLE']->value;?>
</div><?php }?>
                      </td></tr>

          <tr><td id="content">
            <div id="topSpacer"></div>
            <?php }
}

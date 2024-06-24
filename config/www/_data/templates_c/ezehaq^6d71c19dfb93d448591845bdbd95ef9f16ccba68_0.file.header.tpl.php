<?php
/* Smarty version 4.3.1, created on 2024-06-24 11:37:31
  from '/app/www/public/themes/default/template/mail/text/plain/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66795a7bd23328_85317434',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d71c19dfb93d448591845bdbd95ef9f16ccba68' => 
    array (
      0 => '/app/www/public/themes/default/template/mail/text/plain/header.tpl',
      1 => 1719070178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66795a7bd23328_85317434 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['MAIL_TITLE']->value;?>

<?php if (!empty($_smarty_tpl->tpl_vars['MAIL_SUBTITLE']->value)) {
echo $_smarty_tpl->tpl_vars['MAIL_SUBTITLE']->value;?>

<?php }?>
----

<?php }
}

<?php
/* Smarty version 4.3.1, created on 2024-06-24 11:37:31
  from '/app/www/public/themes/default/template/mail/text/plain/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66795a7bd2a5d4_37180780',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18afc7e5b803ba83b7dbeba14dfa8bcf72eeee07' => 
    array (
      0 => '/app/www/public/themes/default/template/mail/text/plain/footer.tpl',
      1 => 1719070178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66795a7bd2a5d4_37180780 (Smarty_Internal_Template $_smarty_tpl) {
?>


----
<?php echo l10n('Sent by');?>
 "<?php echo $_smarty_tpl->tpl_vars['GALLERY_TITLE']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['GALLERY_URL']->value;?>

<?php echo l10n('Powered by');?>
 "Piwigo<?php if (!empty($_smarty_tpl->tpl_vars['VERSION']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['VERSION']->value;
}?>" <?php echo $_smarty_tpl->tpl_vars['PHPWG_URL']->value;?>

<?php echo l10n('Contact');?>
: <?php echo $_smarty_tpl->tpl_vars['CONTACT_MAIL']->value;
}
}

<?php
/* Smarty version 4.3.1, created on 2024-06-24 11:37:31
  from '/app/www/public/themes/default/template/mail/text/html/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66795a7bd01230_34562013',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df3187530721fc137b9b27eab1005919cb443fee' => 
    array (
      0 => '/app/www/public/themes/default/template/mail/text/html/footer.tpl',
      1 => 1719070178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66795a7bd01230_34562013 (Smarty_Internal_Template $_smarty_tpl) {
?>                      </td></tr>

          <tr><td id="footer">
                  
            <?php echo l10n('Sent by');?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['GALLERY_URL']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['GALLERY_TITLE']->value;?>
</a>
            - <?php echo l10n('Powered by');?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['PHPWG_URL']->value;?>
" class="Piwigo">Piwigo</a>
            <?php if (!empty($_smarty_tpl->tpl_vars['VERSION']->value)) {
echo $_smarty_tpl->tpl_vars['VERSION']->value;
}?>
            
            - <?php echo l10n('Contact');?>

            <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['CONTACT_MAIL']->value;?>
?subject=<?php echo rawurlencode((string)l10n('A comment on your site'));?>
"><?php echo l10n('Webmaster');?>
</a>
                      </td></tr>
        </table>

      </td></tr>
    </table>
  </body>
</html><?php }
}

<?php
/* Smarty version 4.3.1, created on 2024-06-24 11:37:31
  from '/app/www/public/themes/default/template/mail/text/html/mail-css-clear.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66795a7bcdef68_03603530',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d4cc8bccb491cd890d8cd01a7f4963e08981b39' => 
    array (
      0 => '/app/www/public/themes/default/template/mail/text/html/mail-css-clear.tpl',
      1 => 1719070178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66795a7bcdef68_03603530 (Smarty_Internal_Template $_smarty_tpl) {
?>/* page */
body {
  color:#111;
}

html, body, #bodyTable {
  background:#fff;
}
#contentTable {
  width:600px;
}

/* main block */
#header {
  background:#eee;
  background-image:radial-gradient(ellipse at center, #fefefe, #e5e5e5);
  border-top:4px solid #f70;
  text-align:center;
  text-shadow:1px 1px 0px #fff;
}
#header #subtitle {
  color:#e06900;
}
#content {
  background:#fefefe;
  border-width:1px;
  border-style:solid;
  border-color:#ddd #eee;
  box-shadow:inset 0 0 20px #eee;
}
#footer {
  background:#eee;
  border-bottom:2px solid #f70;
}

/* links */
a {
  color:#f70;
  text-decoration:none;
}
a:hover {
  text-decoration:underline;
}

/* images */
img.photo {
  border:10px solid #ddd;
}
img.photo:hover {
  border-color:#eee;
}

/* paragraphs */
blockquote {
  border-left:2px solid #aaa;
  border-radius:2px;
}

/* tables */
#content table td {
  border-bottom:1px solid #efefef;
}
#content table th {
  background:#aaa;
  color:#fff;
  border-right:1px solid #ddd;
}
#content table tfoot td {
  background:#eee;
  border-right:1px solid #fff;
}
<?php }
}

<?php
/* Smarty version 3.1.36, created on 2023-03-01 09:00:04
  from 'mailMessage:plaintext' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_63ff8494bc1482_07238840',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dac51ccee8dbecedf9afb805fb153d5c6bf41d7a' => 
    array (
      0 => 'mailMessage:plaintext',
      1 => 1677690004,
      2 => 'mailMessage',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ff8494bc1482_07238840 (Smarty_Internal_Template $_smarty_tpl) {
?>Dear <?php echo $_smarty_tpl->tpl_vars['client_name']->value;?>
, 

This is a notice that a recent credit card payment we attempted on the card we have registered for you failed. 

Invoice Date: <?php echo $_smarty_tpl->tpl_vars['invoice_date_created']->value;?>

Invoice No: <?php echo $_smarty_tpl->tpl_vars['invoice_num']->value;?>

Amount: <?php echo $_smarty_tpl->tpl_vars['invoice_total']->value;?>

Status: <?php echo $_smarty_tpl->tpl_vars['invoice_status']->value;?>
 

You now need to login to your client area to pay the invoice manually. During the payment process you will be given the opportunity to change the card on record with us.
<?php echo $_smarty_tpl->tpl_vars['invoice_link']->value;?>
 

Note: This email will serve as an official receipt for this payment. 

<?php echo $_smarty_tpl->tpl_vars['signature']->value;
}
}

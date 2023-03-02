<?php
/* Smarty version 3.1.36, created on 2022-06-07 09:00:05
  from 'mailMessage:plaintext' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_629f76058b6935_16509717',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dac51ccee8dbecedf9afb805fb153d5c6bf41d7a' => 
    array (
      0 => 'mailMessage:plaintext',
      1 => 1654617605,
      2 => 'mailMessage',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629f76058b6935_16509717 (Smarty_Internal_Template $_smarty_tpl) {
?>Dear <?php echo $_smarty_tpl->tpl_vars['client_name']->value;?>
, 

  This is a notice that an invoice has been generated on <?php echo $_smarty_tpl->tpl_vars['invoice_date_created']->value;?>
. 

  Your payment method is: <?php echo $_smarty_tpl->tpl_vars['invoice_payment_method']->value;?>
 

  Invoice #<?php echo $_smarty_tpl->tpl_vars['invoice_num']->value;?>

 Amount Due: <?php echo $_smarty_tpl->tpl_vars['invoice_total']->value;?>

 Due Date: <?php echo $_smarty_tpl->tpl_vars['invoice_date_due']->value;?>
 

  Invoice Items 

  <?php echo $_smarty_tpl->tpl_vars['invoice_html_contents']->value;?>
 
 ------------------------------------------------------ 

  <?php if ($_smarty_tpl->tpl_vars['invoice_auto_capture_available']->value) {?>
    Payment will be taken automatically from the <?php if ($_smarty_tpl->tpl_vars['invoice_pay_method_type']->value == "bankaccount") {?>bank account<?php } else { ?>credit card<?php }?> <?php echo $_smarty_tpl->tpl_vars['invoice_pay_method_display_name']->value;?>
 on <?php echo $_smarty_tpl->tpl_vars['invoice_next_payment_attempt_date']->value;?>
. To change or pay with a different payment method, please login at <?php echo $_smarty_tpl->tpl_vars['invoice_link']->value;?>
 and click Pay Now, then follow the instructions on screen.
<?php } else { ?>
    Payment will not be taken automatically. To pay your invoice, please login at <?php echo $_smarty_tpl->tpl_vars['invoice_link']->value;?>
 and click Pay Now, then follow the instructions on screen.
<?php }?>
 

  <?php echo $_smarty_tpl->tpl_vars['signature']->value;
}
}

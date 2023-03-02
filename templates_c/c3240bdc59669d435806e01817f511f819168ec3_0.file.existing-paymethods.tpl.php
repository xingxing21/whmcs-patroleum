<?php
/* Smarty version 3.1.36, created on 2022-05-21 15:34:20
  from '/var/www/html/whmcs/templates/orderforms/standard_cart/includes/existing-paymethods.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_628968ecd78e98_89179491',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3240bdc59669d435806e01817f511f819168ec3' => 
    array (
      0 => '/var/www/html/whmcs/templates/orderforms/standard_cart/includes/existing-paymethods.tpl',
      1 => 1645004360,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628968ecd78e98_89179491 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['selectedAccountId']->value === $_smarty_tpl->tpl_vars['client']->value->id) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['client']->value->payMethods->validateGateways()->sortByExpiryDate(), 'payMethod');
$_smarty_tpl->tpl_vars['payMethod']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['payMethod']->value) {
$_smarty_tpl->tpl_vars['payMethod']->do_else = false;
?>
        <?php $_smarty_tpl->_assignInScope('payMethodExpired', 0);?>
        <?php $_smarty_tpl->_assignInScope('expiryDate', '');?>
        <?php if ($_smarty_tpl->tpl_vars['payMethod']->value->isCreditCard()) {?>
            <?php if (($_smarty_tpl->tpl_vars['payMethod']->value->payment->isExpired())) {?>
                <?php $_smarty_tpl->_assignInScope('payMethodExpired', 1);?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['payMethod']->value->payment->getExpiryDate()) {?>
                <?php $_smarty_tpl->_assignInScope('expiryDate', $_smarty_tpl->tpl_vars['payMethod']->value->payment->getExpiryDate()->format('m/Y'));?>
            <?php }?>
        <?php }?>

        <div class="paymethod-info radio-inline" data-paymethod-id="<?php echo $_smarty_tpl->tpl_vars['payMethod']->value->id;?>
">
            <input type="radio"
                   name="ccinfo"
                   class="existing-card"
                   <?php if ($_smarty_tpl->tpl_vars['payMethodExpired']->value) {?>disabled<?php }?>
                   data-payment-type="<?php echo $_smarty_tpl->tpl_vars['payMethod']->value->getType();?>
"
                   data-payment-gateway="<?php echo $_smarty_tpl->tpl_vars['payMethod']->value->gateway_name;?>
"
                   data-order-preference="<?php echo $_smarty_tpl->tpl_vars['payMethod']->value->order_preference;?>
"
                   value="<?php echo $_smarty_tpl->tpl_vars['payMethod']->value->id;?>
">
        </div>

        <div class="paymethod-info" data-paymethod-id="<?php echo $_smarty_tpl->tpl_vars['payMethod']->value->id;?>
">
            <i class="<?php echo $_smarty_tpl->tpl_vars['payMethod']->value->getFontAwesomeIcon();?>
"></i>
        </div>
        <div class="paymethod-info" data-paymethod-id="<?php echo $_smarty_tpl->tpl_vars['payMethod']->value->id;?>
">
            <?php if ($_smarty_tpl->tpl_vars['payMethod']->value->isCreditCard() || $_smarty_tpl->tpl_vars['payMethod']->value->isRemoteBankAccount()) {?>
                <?php echo $_smarty_tpl->tpl_vars['payMethod']->value->payment->getDisplayName();?>

            <?php } else { ?>
                <span class="type">
                <?php echo $_smarty_tpl->tpl_vars['payMethod']->value->payment->getAccountType();?>

            </span>
                <?php echo substr($_smarty_tpl->tpl_vars['payMethod']->value->payment->getAccountNumber(),-4);?>

            <?php }?>
        </div>
        <div class="paymethod-info" data-paymethod-id="<?php echo $_smarty_tpl->tpl_vars['payMethod']->value->id;?>
">
            <?php echo $_smarty_tpl->tpl_vars['payMethod']->value->getDescription();?>

        </div>
        <div class="paymethod-info" data-paymethod-id="<?php echo $_smarty_tpl->tpl_vars['payMethod']->value->id;?>
">
            <?php echo $_smarty_tpl->tpl_vars['expiryDate']->value;
if ($_smarty_tpl->tpl_vars['payMethodExpired']->value) {?><br><small><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaexpired'];?>
</small><?php }?>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}

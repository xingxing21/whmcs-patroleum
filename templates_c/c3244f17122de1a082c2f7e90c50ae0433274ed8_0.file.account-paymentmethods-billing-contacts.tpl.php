<?php
/* Smarty version 3.1.36, created on 2022-05-21 14:44:43
  from '/var/www/html/whmcs/templates/twenty-one/account-paymentmethods-billing-contacts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_62895d4b7848f3_17906455',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3244f17122de1a082c2f7e90c50ae0433274ed8' => 
    array (
      0 => '/var/www/html/whmcs/templates/twenty-one/account-paymentmethods-billing-contacts.tpl',
      1 => 1645004360,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62895d4b7848f3_17906455 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="innerBillingContactsContainer">
    <label class="form-check form-check-inline billing-contact-0">
        <input
            type="radio"
            class="icheck-button"
            name="billingcontact"
            value="0"
            <?php if ($_smarty_tpl->tpl_vars['payMethod']->value->contactType == 'Client' || ($_smarty_tpl->tpl_vars['payMethod']->value->contactType === null && $_smarty_tpl->tpl_vars['client']->value->billingContactId === 0)) {?>
                checked
            <?php }?>>
        <strong class="name"><?php echo $_smarty_tpl->tpl_vars['client']->value->fullName;?>
</strong>
        <span class="address1"><?php echo $_smarty_tpl->tpl_vars['client']->value->address1;?>
</span>,
        <?php if ($_smarty_tpl->tpl_vars['client']->value->address2) {?><span class="address2"><?php echo $_smarty_tpl->tpl_vars['client']->value->address2;?>
</span>,<?php }?>
        <span class="city"><?php echo $_smarty_tpl->tpl_vars['client']->value->city;?>
</span>,
        <span class="state"><?php echo $_smarty_tpl->tpl_vars['client']->value->state;?>
</span>,
        <span class="postcode"><?php echo $_smarty_tpl->tpl_vars['client']->value->postcode;?>
</span>,
        <span class="country"><?php echo $_smarty_tpl->tpl_vars['client']->value->country;?>
</span>
    </label>
    <br>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['client']->value->contacts()->orderBy('firstname','asc')->orderBy('lastname','asc')->get(), 'contact');
$_smarty_tpl->tpl_vars['contact']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['contact']->value) {
$_smarty_tpl->tpl_vars['contact']->do_else = false;
?>
        <label class="form-check form-check-inline billing-contact-<?php echo $_smarty_tpl->tpl_vars['contact']->value->id;?>
">
            <input
                type="radio"
                class="icheck-button"
                name="billingcontact"
                value="<?php echo $_smarty_tpl->tpl_vars['contact']->value->id;?>
"
                <?php if ($_smarty_tpl->tpl_vars['payMethod']->value->contactType == 'Contact' && $_smarty_tpl->tpl_vars['contact']->value->id == $_smarty_tpl->tpl_vars['payMethod']->value->getContactId()) {?>
                    checked
                <?php } elseif ($_smarty_tpl->tpl_vars['payMethod']->value->contactType === null && $_smarty_tpl->tpl_vars['client']->value->billingContactId > 0) {?>
                    <?php if ($_smarty_tpl->tpl_vars['contact']->value->id == $_smarty_tpl->tpl_vars['client']->value->billingContactId || $_smarty_tpl->tpl_vars['contact']->value->id == $_smarty_tpl->tpl_vars['selectedContactId']->value) {?>
                        checked
                    <?php }?>
                <?php }?>>
            <strong class="name"><?php echo $_smarty_tpl->tpl_vars['contact']->value->fullName;?>
</strong>
            <span class="address1"><?php echo $_smarty_tpl->tpl_vars['contact']->value->address1;?>
</span>,
            <?php if ($_smarty_tpl->tpl_vars['contact']->value->address2) {?><span class="address2"><?php echo $_smarty_tpl->tpl_vars['contact']->value->address2;?>
</span>,<?php }?>
            <span class="city"><?php echo $_smarty_tpl->tpl_vars['contact']->value->city;?>
</span>,
            <span class="state"><?php echo $_smarty_tpl->tpl_vars['contact']->value->state;?>
</span>,
            <span class="postcode"><?php echo $_smarty_tpl->tpl_vars['contact']->value->postcode;?>
</span>,
            <span class="country"><?php echo $_smarty_tpl->tpl_vars['contact']->value->country;?>
</span>
        </label>
        <br>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<?php echo '<script'; ?>
>
jQuery(document).ready(function() {
    jQuery('#innerBillingContactsContainer').find('.icheck-button').iCheck({
        inheritID: true,
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%'
    });
});
<?php echo '</script'; ?>
>
<?php }
}

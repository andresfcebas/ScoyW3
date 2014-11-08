<h1><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate($t->pageTitle));?></h1>
<div class="message"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'msgGet'))) echo $t->msgGet();?></div>

<div class="fieldsetlike">
    <h3><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Personal Details"));?></h3>
    <dl>
        <dt><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Username"));?></dt>
        <dd><?php echo htmlspecialchars($t->user->username);?></dd>
        <dt><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("First Name"));?></dt>
        <dd><?php echo htmlspecialchars($t->user->first_name);?>&nbsp;</dd>
        <dt><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Last Name"));?></dt>
        <dd><?php echo htmlspecialchars($t->user->last_name);?>&nbsp;</dd>
    </dl>
</div>

<div class="fieldsetlike">
    <h3><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Contact"));?></h3>
    <dl>
        <dt><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Email"));?></dt>
        <dd><?php echo htmlspecialchars($t->user->email);?></dd>
        <dt><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Telephone"));?></dt>
        <dd><?php echo htmlspecialchars($t->user->telephone);?>&nbsp;</dd>
        <dt><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Mobile"));?></dt>
        <dd><?php echo htmlspecialchars($t->user->mobile);?>&nbsp;</dd>
    </dl>
</div>

<div class="fieldsetlike">
    <h3><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Location"));?></h3>
    <dl>
        <dt><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Address 1"));?></dt>
        <dd><?php echo htmlspecialchars($t->user->addr_1);?>&nbsp;</dd>
        <dt><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Address 2"));?></dt>
        <dd><?php echo htmlspecialchars($t->user->addr_2);?>&nbsp;</dd>
        <dt><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Address 3"));?></dt>
        <dd><?php echo htmlspecialchars($t->user->addr_3);?>&nbsp;</dd>
        <dt><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("City"));?></dt>
        <dd><?php echo htmlspecialchars($t->user->city);?>&nbsp;</dd>
        <dt><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("County/State/Province"));?></dt>
        <dd><?php echo htmlspecialchars($t->user->region);?>&nbsp;</dd>
        <dt><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("ZIP/Postal Code"));?></dt>
        <dd><?php echo htmlspecialchars($t->user->post_code);?>&nbsp;</dd>
        <dt><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Country"));?></dt>
        <dd><?php echo htmlspecialchars($t->user->country);?>&nbsp;</dd>
    </dl>
</div>

<p>
    <a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("edit","account","user"));?>"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("edit these values"));?></a>
    &nbsp;&nbsp;&nbsp;
    <a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("summary","account","user"));?>"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("back","ucfirst"));?></a>
</p>
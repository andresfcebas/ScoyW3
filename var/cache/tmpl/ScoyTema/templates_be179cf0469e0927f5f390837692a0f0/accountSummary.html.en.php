<h1><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate($t->pageTitle));?></h1>
<div class="message"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'msgGet'))) echo $t->msgGet();?></div>

<div class="fieldsetlike">
    <h3><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Status"));?></h3>
    <dl>
        <dt><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Role"));?></dt>
        <dd><?php echo htmlspecialchars($t->user->role_name);?></dd>
        <dt><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Date Registered"));?></dt>
        <dd><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'formatDatePretty'))) echo htmlspecialchars($t->formatDatePretty($t->user->date_created));?></dd>
        <?php if ($t->conf['LoginMgr']['recordLogin'])  {?>
        <dt><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Last Login"));?></dt>
        <dd>
            <?php if ($t->login->last_login)  {?>
            <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'formatDatePretty'))) echo htmlspecialchars($t->formatDatePretty($t->login->last_login));?>
            <?php } else {?>
            <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("first login in progress"));?>
            <?php }?>
        </dd>
        <?php }?>
        <dt><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Current IP Address"));?></dt>
        <dd><?php echo htmlspecialchars($t->remote_ip);?></dd>
    </dl>
</div>

<div class="fieldsetlike">
    <h3><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Action"));?></h3>
    <dl>
        <dt><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("My Profile"));?></dt>
        <dd>
            <a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("viewProfile","account","user"));?>"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("view profile"));?></a>
        </dd>
        <dt><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Preferences"));?></dt>
        <dd>
            <a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("","userpreference","user"));?>"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("edit preferences"));?></a>
        </dd>
        <dt><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Password"));?></dt>
        <dd>
            <a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("edit","userpassword","user"));?>"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("change password"));?></a>
        </dd>
        <?php if ($t->conf['cookie']['rememberMeEnabled'])  {?>
        <dt><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Manage Cookies"));?></dt>
        <dd>
            <a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("removeCookies","login","user"));?>"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("remove persistent cookies"));?></a>
        </dd>
        <?php }?>
    </dl>
    </dl>
</div>

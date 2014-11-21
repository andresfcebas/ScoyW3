<div id="manager-actions">
    <span><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Action"));?>: &nbsp;</span>
    <a class="action save" href="javascript:formSubmit('main_form')"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Save"));?></a>
    <a class="action undo" href="javascriptformReset('main_form')"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Reset"));?></a>
    <a class="action cancel" href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("list","role","user"));?>"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Cancel"));?></a>
</div>
<div id="content">
    <div id="content-header">
        <h2><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate($t->pageTitle));?></h2>
        <div class="message"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'msgGet'))) echo htmlspecialchars($t->msgGet());?></div>
    </div>
    <form method="post" action="" name="main_form" id="main_form">
        <h3><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Changing permission assignments for"));?> "<?php echo htmlspecialchars($t->role->name);?>" (#<?php echo htmlspecialchars($t->role->role_id);?>)</h3>
        <fieldset class="inside">
            <input type="hidden" name="action" value="updatePerms" />
            <input type="hidden" name="frmRoleID" value="<?php echo htmlspecialchars($t->role->role_id);?>" />
            <input type="hidden" name="AddfrmRolePerms" />
            <input type="hidden" name="RemovefrmRolePerms" /> 
            <input type="hidden" name="AddfrmRemainingPerms" /> 
            <input type="hidden" name="RemovefrmRemainingPerms" />

            <div class="floatLeft" id="remainingPerms">
                <h4><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Remaining permissions"));?></h4>
                <select name="frmRemainingPerms" id="frmRemainingPerms" size="10" multiple="multiple">
                    <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'generateSelect'))) echo $t->generateSelect($t->aRemainingPerms);?>
                </select>
            </div>
            <div class="floatLeft" id="addRemovePerms">
                <a href="#" class="moveRight" onclick="MoveOption('frmRemainingPerms','frmRolePerms','Add');"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("add"));?></a>
                <a href="#" class="moveLeft" onclick="MoveOption('frmRolePerms','frmRemainingPerms','Remove');"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("remove"));?></a>
            </div>
            <div class="floatLeft" id="selectedPerms">
                <h4><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Selected permissions for"));?> "<?php echo htmlspecialchars($t->role->name);?>"</h4>
                <select name="frmRolePerms" id="frmRolePerms" size="10" multiple="multiple">
                    <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'generateSelect'))) echo $t->generateSelect($t->aRolePerms);?>
                </select>
            </div>
            <div class="spacer">&nbsp;</div>
        </fieldset>
    </form>
    <div class="spacer"></div>
</div>

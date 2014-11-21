<div id="manager-actions">
    <span><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Action"));?>: &nbsp;</span>
    <a class="action save" href="javascript:formSubmit('frmRoleEdit','submitted',1,1);"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Save"));?></a>
    <a class="action undo" href="javascript:formReset('frmRoleEdit');"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Reset"));?></a>
    <a class="action cancel" href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("list","role","user"));?>"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Cancel"));?></a>
</div>
<div id="content">
    <div id="content-header">
        <h2><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate($t->pageTitle));?></h2>
        <div class="message"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'msgGet'))) echo htmlspecialchars($t->msgGet());?></div>
    </div>
    <form action="" method="post" name="frmRoleEdit" id="frmRoleEdit">
        <?php if ($t->roleAdd)  {?><h3><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("New Role"));?></h3><?php }?>
        <?php if ($t->roleEdit)  {?><h3><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Editing role"));?> "<?php echo htmlspecialchars($t->role->name);?>" (#<?php echo htmlspecialchars($t->roleId);?>)</h3><?php }?>
        <fieldset class="inside">
            <?php if ($t->roleAdd)  {?>
            <input type="hidden" name="action" value="insert" />
            <?php }?>
            <?php if ($t->roleEdit)  {?>
            <input type="hidden" name="action" value="update" />
            <input type="hidden" name="role[role_id]" value="<?php echo htmlspecialchars($t->roleId);?>" />
            <?php }?>
            <p>
                <label for="role[name]"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Name"));?><span class="required"> *</span></label>
                <?php if ($t->error['name'])  {?><span class="error"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate($t->error['name']));?></span><?php }?>
                <input type="text" class="longText" name="role[name]" id="role[name]" value="<?php echo htmlspecialchars($t->role->name);?>" />
            </p>
            <p>
                <label for="role[description]"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Description"));?></label>
                <textarea class="longText" rows="3" name="role[description]" id="role[description]"><?php echo htmlspecialchars($t->role->description);?></textarea>
            </p>
            <p class="helpRequire">
                <span class="required">*</span><span class="small"> <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("denotes required field"));?></span>
            </p>
        </fieldset>
    </form>
    <div class="spacer"></div>
</div>

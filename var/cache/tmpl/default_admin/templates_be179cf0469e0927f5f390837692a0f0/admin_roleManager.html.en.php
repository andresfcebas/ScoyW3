<div id="manager-actions">
    <span><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Action"));?>: &nbsp;</span>
    <a class="action add" href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("add","role","user"));?>"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("New Role"));?></a>
</div>
<div id="content">
    <div id="content-header">
        <h2><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate($t->pageTitle));?></h2>
        <div class="message"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'msgGet'))) echo htmlspecialchars($t->msgGet());?></div>
    </div>
    <form name="roles" id="roles" method="post">
        <fieldset class="noBorder">
            <input type="hidden" name="action" value="delete" />

            <table class="full">
                <thead>
                    <tr class="infos">
                        <td class="right" colspan="6">
                        <?php if ($t->pager)  {?><?php 
$x = new HTML_Template_Flexy($this->options);
$x->compile('admin_pager_table.html');
$_t = function_exists('clone') ? clone($t) : $t;
foreach(array()  as $k) {
    if ($k != 't') { $_t->$k = $$k; }
}
$x->outputObject($_t, $this->elements);
?><?php }?>
                        </td>
                    </tr>
                    <tr>
                        <th width="3%">
                            <span class="tipOwner">
                                <span class="tipText" id="becareful"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Be Careful!"));?></span>
                                <input type="checkbox" name="checkAll" id="checkAll" onclick="javascript:applyToAllCheckboxes('roles', 'frmDelete[]', this.checked)" />
                            </span>
                        </th>
                        <th width="5%"><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("list","role","user","","frmSortBy|role_id||frmSortOrder|sortOrder"));?>"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("ID"));?></a><?php if ($t->sort_role_id)  {?><img src="<?php echo htmlspecialchars($t->webRoot);?>/themes/<?php echo htmlspecialchars($t->theme);?>/images/sort_<?php echo htmlspecialchars($t->sortOrder);?>.gif" alt="" /><?php }?></th>
                        <th width="15%" class="left"><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("list","role","user","","frmSortBy|name||frmSortOrder|sortOrder"));?>"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Name"));?></a><?php if ($t->sort_name)  {?><img src="<?php echo htmlspecialchars($t->webRoot);?>/themes/<?php echo htmlspecialchars($t->theme);?>/images/sort_<?php echo htmlspecialchars($t->sortOrder);?>.gif" alt="" /><?php }?></th>
                        <th width="53%" class="left"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Description"));?></th>
                        <th width="12%"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Permissions"));?></th>
                        <th width="12%"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Role"));?></th>
                    </tr>
                </thead>
                <tfoot>
                    <tr class="infos">
                        <td class="right" colspan="6">
                        <?php if ($t->pager)  {?><?php 
$x = new HTML_Template_Flexy($this->options);
$x->compile('admin_pager_table.html');
$_t = function_exists('clone') ? clone($t) : $t;
foreach(array()  as $k) {
    if ($k != 't') { $_t->$k = $$k; }
}
$x->outputObject($_t, $this->elements);
?><?php }?>
                        </td>
                    </tr>
                </tfoot>
                <tbody>
                    <?php if ($this->options['strict'] || (is_array($t->aPagedData['data'])  || is_object($t->aPagedData['data']))) foreach($t->aPagedData['data'] as $key => $aValue) {?><tr class="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'switchRowClass'))) echo htmlspecialchars($t->switchRowClass());?>">
                        <td><input type="checkbox" name="frmDelete[]" value="<?php echo htmlspecialchars($aValue['role_id']);?>" /></td>
                        <td><?php echo htmlspecialchars($aValue['role_id']);?></td>
                        <td class="left"><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("edit","role","user",$t->aPagedData['data'],"frmRoleID|role_id",$key));?>"><?php echo htmlspecialchars($aValue['name']);?></a></td>
                        <td class="left"><?php echo htmlspecialchars($aValue['description']);?></td>
                        <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'isAdminOrUnassigned'))) if ($t->isAdminOrUnassigned($aValue['role_id'])) { ?><td>&nbsp;</td><?php }?>
                        <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'isAdminOrUnassigned'))) if (!$t->isAdminOrUnassigned($aValue['role_id'])) { ?><td>
                        <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'isEqual'))) if (!$t->isEqual($aValue['name'],"guest")) { ?>
                        <a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("editPerms","role","user",$t->aPagedData['data'],"frmRoleID|role_id",$key));?>" class="sgl-button"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("change"));?></a>
                        <?php }?>
                        </td><?php }?>
                        <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'isAdminOrUnassigned'))) if ($t->isAdminOrUnassigned($aValue['role_id'])) { ?><td>&nbsp;</td><?php }?>
                        <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'isAdminOrUnassigned'))) if (!$t->isAdminOrUnassigned($aValue['role_id'])) { ?><td>
                        <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'isEqual'))) if (!$t->isEqual($aValue['name'],"guest")) { ?>
                        <a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("duplicate","role","user",$t->aPagedData['data'],"frmRoleID|role_id",$key));?>" class="sgl-button"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("duplicate"));?></a>
                        <?php }?>
                        </td><?php }?>
                    </tr><?php }?>
                </tbody>
            </table>
            <input type="submit" class="sgl-button" name="delete" value="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("delete selected"));?>" onClick="return confirmSubmit('<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("role"));?>', 'roles')" />
        </fieldset>
    </form>
    <div class="spacer"></div>
</div>

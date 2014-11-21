<div id="manager-actions">
    <span><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Action"));?>: &nbsp;</span>
    <a class="action add" href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("add","permission","user"));?>"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("New permission"));?></a>
    <a class="action scannew" href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("scanNew","permission","user"));?>"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("detect & add permissions","ucfirst"));?></a>
    <a class="action delorphaned" href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("scanOrphaned","permission","user"));?>"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("remove orphaned","ucfirst"));?></a>
</div>
<div id="content">
    <div id="content-header">
        <h2><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate($t->pageTitle));?></h2>
        <div class="message"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'msgGet'))) echo htmlspecialchars($t->msgGet());?></div>
    </div>
    <form name="perms" method="post" action="" id="perms">
        <fieldset class="inside" id="frmFilterSwitcher">
            <p>
                <label><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("filter by module"));?></label>
                <select name="frmModuleId" onChange="javascript:if(this.value == 0) {document.location.href='<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("list","permission","user"));?>'} else {document.location.href='<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("list","permission","user"));?>frmModuleId/' + this.value + '/'};" />
                    <option value="0" /><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("all"));?>
                    <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'generateSelect'))) echo $t->generateSelect($t->aModules,$t->currentModule);?>
                </select>
            </p>
        </fieldset>
        <fieldset class="noBorder">
            <input type="hidden" name="action" value="delete" />

            <table class="full">
                <thead>
                    <?php if ($t->pager)  {?><tr class="infos">
                        <td class="right" colspan="4">
                            <?php 
$x = new HTML_Template_Flexy($this->options);
$x->compile('admin_pager_table.html');
$_t = function_exists('clone') ? clone($t) : $t;
foreach(array()  as $k) {
    if ($k != 't') { $_t->$k = $$k; }
}
$x->outputObject($_t, $this->elements);
?>
                        </td>
                    </tr><?php }?>
                    <tr>
                        <th width="3%">
                            <span class="tipOwner">
                                <span class="tipText" id="becareful"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Be Careful!"));?></span>
                                <input type="checkbox" name="checkAll" id="checkAll" onclick="javascript:applyToAllCheckboxes('perms', 'frmDelete[]', this.checked)" />
                            </span>
                        </th>
                        <th width="5%"><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("list","permission","user","","frmSortBy|permission_id||frmSortOrder|sortOrder"));?>"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("ID"));?></a><?php if ($t->sort_permission_id)  {?><img src="<?php echo htmlspecialchars($t->webRoot);?>/themes/<?php echo htmlspecialchars($t->theme);?>/images/sort_<?php echo htmlspecialchars($t->sortOrder);?>.gif" alt="" /><?php }?></th>
                        <th width="37%" class="left"><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("list","permission","user","","frmSortBy|name||frmSortOrder|sortOrder"));?>"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Name"));?></a><?php if ($t->sort_name)  {?><img src="<?php echo htmlspecialchars($t->webRoot);?>/themes/<?php echo htmlspecialchars($t->theme);?>/images/sort_<?php echo htmlspecialchars($t->sortOrder);?>.gif" alt="" /><?php }?></th>
                        <th width="55%" class="left"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Description"));?></th>
                    </tr>
                </thead>
                <tfoot>
                    <?php if ($t->pager)  {?><tr class="infos">
                        <td class="right" colspan="5">
                            <?php 
$x = new HTML_Template_Flexy($this->options);
$x->compile('admin_pager_table.html');
$_t = function_exists('clone') ? clone($t) : $t;
foreach(array()  as $k) {
    if ($k != 't') { $_t->$k = $$k; }
}
$x->outputObject($_t, $this->elements);
?>
                        </td>
                    </tr><?php }?>
                </tfoot>
                <tbody>
                    <?php if ($this->options['strict'] || (is_array($t->aPagedData['data'])  || is_object($t->aPagedData['data']))) foreach($t->aPagedData['data'] as $key => $aValue) {?><tr class="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'switchRowClass'))) echo htmlspecialchars($t->switchRowClass());?>">
                        <td><input type="checkbox" name="frmDelete[]" value="<?php echo htmlspecialchars($aValue['permission_id']);?>" /></td>
                        <td><?php echo htmlspecialchars($aValue['permission_id']);?></td>
                        <td class="left"><a href="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'makeUrl'))) echo htmlspecialchars($t->makeUrl("edit","permission","user",$t->aPagedData['data'],"frmPermId|permission_id",$key));?>"><?php echo htmlspecialchars($aValue['name']);?></a></td>
                        <td class="left"><?php echo htmlspecialchars($aValue['description']);?></td>
                    </tr><?php }?>
                </tbody>
            </table>
            <input type="submit" class="sgl-button" name="delete" value="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("delete selected"));?>" onClick="return confirmSubmit('<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("permission"));?>', 'perms')" />
        </fieldset>
    </form>
    <div class="spacer"></div>
</div>

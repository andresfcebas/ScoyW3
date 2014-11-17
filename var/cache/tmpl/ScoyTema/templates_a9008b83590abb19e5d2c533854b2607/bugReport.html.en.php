<h1><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate($t->pageTitle));?></h1>
<div class="message"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'msgGet'))) echo $t->msgGet();?></div>

<form id="bugReport" method="post" action="">
    <p>
        Found a bug? Please fill out and submit the form below - help us make
        Seagull better software.<br />
         -- Thanks
    </p>
    <fieldset class="hide">
        <input type="hidden" name="action" value="send" />
    </fieldset>
    <fieldset class="lastChild">
        <legend>Fill in the form</legend>
        <ol class="clearfix">
            <li>
                <label for="bug_reporterFirstName">
                    <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("First Name"));?>
                </label>
                <div>
                    <input id="bug_reporterFirstName" class="text" type="text" name="bug[reporter_first_name]" value="<?php echo htmlspecialchars($t->bug->reporter_first_name);?>" />
                </div>
            </li>
            <li>
                <label for="bug_reporterLastName">
                    <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Last Name"));?>
                </label>
                <div>
                    <input id="bug_reporterLastName" class="text" type="text" name="bug[reporter_last_name]" value="<?php echo htmlspecialchars($t->bug->reporter_last_name);?>" />
                </div>
            </li>
            <li>
                <label for="bug_reporterEmail">
                    <em>*</em> <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Email"));?>
                </label>
                <div>
                    <?php if ($t->error['reporter_email'])  {?><p class="error">
                        <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate($t->error['reporter_email']));?>
                    </p><?php }?>
                    <input id="bug_reporterEmail" class="text" type="text" name="bug[reporter_email]" value="<?php echo htmlspecialchars($t->bug->reporter_email);?>" />
                </div>
            </li>
            <li>
                <label for="bug_severity">
                    <em>*</em> <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Severity of bug"));?>
                </label>
                <div>
                    <select id="bug_severity" name="bug[severity]">
                        <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'generateSelect'))) echo $t->generateSelect($t->aSeverityTypes,$t->bug->severity);?>
                    </select>
                </div>
            </li>
            <li>
                <label for="bug_description">
                    <em>*</em> <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Description"));?>
                </label>
                <div>
                    <?php if ($t->error['description'])  {?><p class="error">
                        <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate($t->error['description']));?>
                    </p><?php }?>
                    <input id="bug_description" class="text" type="text" name="bug[description]" value="<?php echo htmlspecialchars($t->bug->description);?>" />
                </div>
            </li>
            <li>
                <label for="bug_comment">
                    <em>*</em> <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Comment"));?>
                </label>
                <div>
                    <?php if ($t->error['comment'])  {?><p class="error">
                    <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate($t->error['comment']));?>
                    </p><?php }?>
                    <textarea id="bug_comment" name="bug[comment]" cols="60" rows="5"><?php echo htmlspecialchars($t->bug->comment);?></textarea>
                </div>
            </li>
            <li>
                <label for="bug_environment"><?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Your environment"));?></label>
                <div>
                    <textarea id="bug_environment" name="bug[environment]" cols="60" rows="11" readonly="readonly">
                        <?php echo htmlspecialchars($t->environment);?>
                    </textarea>
                </div>
            </li>
        </ol>
    </fieldset>
    <p class="fieldIndent">
        <input class="submit" type="submit" name="submitted" value="<?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'translate'))) echo htmlspecialchars($t->translate("Send"));?>" />
        [bugs sent to bugs@phpkitchen.com]
    </p>
</form>

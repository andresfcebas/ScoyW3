<?php 
$x = new HTML_Template_Flexy($this->options);
$x->compile('header.html');
$_t = function_exists('clone') ? clone($t) : $t;
foreach(array()  as $k) {
    if ($k != 't') { $_t->$k = $$k; }
}
$x->outputObject($_t, $this->elements);
?>
        <?php if ($this->options['strict'] || (isset($t) && method_exists($t, 'outputBody'))) echo htmlspecialchars($t->outputBody());?>
    </div><!-- end wrapper-outer -->
</body>
</html>
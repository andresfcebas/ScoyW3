<?php 
$x = new HTML_Template_Flexy($this->options);
$x->compile('master.html');
$_t = function_exists('clone') ? clone($t) : $t;
foreach(array()  as $k) {
    if ($k != 't') { $_t->$k = $$k; }
}
$x->outputObject($_t, $this->elements);
?>
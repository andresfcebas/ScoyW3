<?php

class RaikerMgr extends SGL_Manager{
    
    function display(&$output){
        $output->template = 'Raiker.html';
        $output->testVariable = 'Hello Raiker!';
    }
    
}

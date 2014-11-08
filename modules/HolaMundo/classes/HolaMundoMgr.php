<?php

class HolaMundoMgr extends SGL_Manager{
    function display(&$output){
        $output->template = 'HolaMundo.html';
        $output->testVariable = 'Ola K Ase';
    }
}

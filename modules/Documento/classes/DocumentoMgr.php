<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DocumentoMgr
 * Controlador del modulo Documento
 *
 * @author ScoyW3
 */
class DocumentoMgr extends SGL_Manager{
    function display(&$output){
        $output->template = 'Documento.html';
        $output->testVariable = 'McBees';
        $output->idDocumento = 1;
        $output->idDocumento2 = 5;
        $output->idDocumento3 = $output->idDocumento+$output->idDocumento2;
    }
}

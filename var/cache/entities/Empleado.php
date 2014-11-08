<?php
/**
 * Table Definition for empleado
 */
require_once 'DB/DataObject.php';

class DataObjects_Empleado extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'empleado';                        // table name
    public $codigo;                          // int(8)  not_null primary_key auto_increment
    public $NOMBRES;                         // string(80)  
    public $FECHANACIMIENTO;                 // string(80)  
    public $CODIGODEPARTAMENTO;              // int(8)  multiple_key
    public $SALARIO;                         // int(8)  

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Empleado',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}

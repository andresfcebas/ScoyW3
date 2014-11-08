<?php
/**
 * Table Definition for departamento
 */
require_once 'DB/DataObject.php';

class DataObjects_Departamento extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'departamento';                    // table name
    public $codigo;                          // int(8)  not_null primary_key auto_increment
    public $nombreDepartamento;              // string(80)  

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Departamento',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}

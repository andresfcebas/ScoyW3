<?php
/**
 * Table Definition for log_table_seq
 */
require_once 'DB/DataObject.php';

class DataObjects_Log_table_seq extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_table_seq';                   // table name
    public $id;                              // int(10)  not_null primary_key unsigned auto_increment

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Log_table_seq',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}

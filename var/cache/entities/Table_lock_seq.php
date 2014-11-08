<?php
/**
 * Table Definition for table_lock_seq
 */
require_once 'DB/DataObject.php';

class DataObjects_Table_lock_seq extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'table_lock_seq';                  // table name
    public $id;                              // int(10)  not_null primary_key unsigned auto_increment

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Table_lock_seq',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}

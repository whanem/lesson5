<?php

class DBadmin
    extends DB
{
    public function sqlUpdateInsertDelete($query){
        mysql_query($query);
    }
}
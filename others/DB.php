<?php
class DB{
    function __construct(){
        $login = 'root';
        $password = '';
        $server = 'localhost';
        $db_name = 'Site_News';

        mysql_connect($server, $login, $password);
        mysql_select_db($db_name);
    }

    public function sql_query($query, $class = 'stdClass'){
        $data_DB = [];
        $sql_query = mysql_query($query);

        while( false !== $q = mysql_fetch_object($sql_query, $class) ){
            $data_DB[] = $q;
        }
        return $data_DB;
    }


}

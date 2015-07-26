<?php

class AdminNews
    extends News
{
    public static $table = 'News';

    public static function Add($title, $article)
    {
        $DB = new DBadmin;
        $query = 'INSERT INTO '. static::$table .'
                    (title, article)
                    VALUES
                    ("' . $title . '", "' . $article . '")';
        $DB->sqlUpdateInsertDelete($query);
    }
}
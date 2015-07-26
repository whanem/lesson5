<?php

class News{
    protected static $table = 'News';
    protected static $class = 'News';

    public static function getAll(){

        $DB = new DB;
        $query = 'SELECT * FROM ' . static::$table;
        return $DB->sql_query($query, static::$class);
    }

    public static function getOne($id){

        $DB = new DB;
        $query = 'SELECT * FROM ' . static::$table . ' WHERE id=' . $id;
        return $DB->sql_query($query, static::$class)[0];
    }

    public static function newsPreview($articles, $lenght){
       $i = 0;
        foreach($articles as $article){
            $articles[$i]->article = mb_strcut($article->article, 0, $lenght);
            $i++;
        }
        return $articles;
    }
}
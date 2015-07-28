<?php

class AbstractDBModel
{
    protected static $table;
    protected $data = [];

    public function __set($k, $v)
    {
        $this->data[$k] = $v;
    }
    public function __get($k)
    {
        return $this->data[$k];
    }

    public static function findAll()
    {
        $className = get_called_class();
        $sql = 'SELECT * FROM ' . static::$table;
        $DB = new DB();

        $DB->setClassName($className);
        return $DB->query($sql);
    }

    public static function findByPK($id)
    {
        $className = get_called_class();
        $sql = 'SELECT * FROM ' . static::$table . ' WHERE id=:id';
        $params = [':id' => $id];

        $DB = new DB();
        $DB->setClassName($className);
        return $DB->query($sql, $params)[0];
    }

    public static function findByColumn($column, $value)
    {
        $className = get_called_class();
        $sql = 'SELECT * FROM ' . static::$table . ' WHERE ' . $column . '=":value"';
        $params = [':value' => $value];

        $DB = new DB();
        $DB->setClassName($className);
        return $DB->query($sql, $params);
    }

    public function insert()
    {
        foreach($this->data as $k => $v){
            $keys[$k] = ':' . $k;
            $params[':' . $k] = $v;
        }

        $sql = 'INSERT INTO ' . static::$table .
            ' ('. implode(', ', array_keys($keys)) .')
            VALUES
            ('. implode(', ', $keys) .')';

        $DB = new DB();
        $DB->execute($sql, $params);
        $this->id = $DB->lastInsertId();
    }
    public function update()
    {
        $data = [];
        $params = [];
        foreach($this->data as $k => $v){
            $params[':' . $k] = $v;
            if('id' == $k)
                continue;
            $data[] = $k . '=:' . $k;
        }

        $sql = 'UPDATE ' . static::$table . '
                SET ' . implode(', ', $data) . '
                WHERE id=:id
                ';

        $DB = new DB();
        $DB->execute($sql, $params);
    }

    public function delete()
    {
        $sql = 'DELETE FROM ' . static::$table . ' WHERE id=:id';
        $params = [':id' => $this->id];

        $DB = new DB;
        $DB->execute($sql, $params);
    }
}
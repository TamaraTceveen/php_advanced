<?php
namespace app\models;

use app\engine\Db;

abstract class DBModel extends Model
{
    abstract protected static function getTableName();

    public static function getOne($id) {
        $tableName = static::getTableName();
        $sql = "SELECT * FROM {$tableName} WHERE id = :id";
        
        return DB::getInstance()->queryOneObject($sql, ['id' => $id], static::class);
    }

    public static function getAll() {
        $tableName = static::getTableName();
        $sql = "SELECT * FROM {$tableName}";
        return DB::getInstance()->queryAll($sql);
    }

    public static function getLimit($limit) {
        $tableName = static::getTableName();
        $sql = "SELECT * FROM {$tableName} LIMIT 0, ?";
        return Db::getInstance()->queryLimit($sql, $limit);
    }

    //WHERE 'session_id' == 'asd32d2fg54h'
    public static function getCountWhere($name, $value) {
        $tableName = static::getTableName();
        $sql = "SELECT count(id) as count FROM {$tableName} WHERE `{$name}`=:value";
        
        return Db::getInstance()->queryOne($sql, ['value' => $value])['count'];
    }

    public function getJoin() {
        //todoooo. for example for busket
    }

    public function getOneWhere($name, $value) {
        $tableName = static::getTableName();
        $sql = "SELECT * FROM {$tableName} WHERE `{$name}`=:value";
        return Db::getInstance()->queryOneObject($sql, ['value' => $value], static::class);

    }

    protected function insert() {

        $params = [];
        $columns = [];
        
        foreach ($this->props as $key => $value) {
            
            $params[":{$key}"]=$this->$key;
            $columns[] = $key;
            
        }
        
        $columns = implode(', ', $columns);
        $value = implode(', ', array_keys($params));
        $tableName = static::getTableName();
        
        $sql = "INSERT INTO {$tableName} ({$columns}) VALUES ({$value})";
                
        DB::getInstance()->execute($sql, $params);
        
        $this->id = DB::getInstance()->lastInsertId();

        return $this;
    }

    protected function update() {
        
        $params = [];
        $columns = [];

        
        foreach ($this->props as $key => $value)
        {
            // var_dump("/////////////////".$key);
            // var_dump("++++++++++++++".$this -> $key);

            if(!$value) continue;
            $params["{$key}"] = $this->$key;
            $columns[] .= "`{$key}` = :{$key}";//
            $this->props[$key] = false;
        }

        $columns = implode(", ", $columns);
        $tableName = static::getTableName();
        $params['id'] = $this->id;

        $sql = "UPDATE {$tableName} SET {$columns} WHERE id = :id";

        Db::getInstance()->execute($sql, $params);
    }

    public function delete() {
        $tableName = static::getTableName();
        $sql = "DELETE FROM {$tableName} WHERE id = :id";
        return Db::getInstance()->execute($sql, ['id' => $this->id]);
    }

    public function save() {
        if (is_null($this->id)) {
            return $this->insert();
        } else {
            return $this->update();
        }
    }
}
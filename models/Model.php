<?php

namespace app\models;

use app\engine\Db;
use app\interfaces\IModel;

abstract class Model implements IModel
{
    public function __set($name, $value) {
        $this->$name = $value;

    }

    public function __get($name) {
        return $this->$name;
    }

    abstract protected function getTableName();

    public function getOne($id) {
        $sql = "SELECT * FROM {$this->getTableName()} WHERE id = :id";
        // return DB::getInstance()->queryOne($sql, ['id' => $id]);
        return DB::getInstance()->queryOneObject($sql, ['id' => $id], get_called_class());
    }

    public function getAll() {
        $sql = "SELECT * FROM {$this->getTableName()}";
        return DB::getInstance()->queryAll($sql);
    }

    public function insert() {
        $keys = '';
        $values = '';
        
        foreach ($this as $key => $value) {
            if ($key == 'id') continue;
            $params[$key]=$value;
            $keys .= "`{$key}`,";
            $values .= ":{$key},";
            
        }
        
        $keys = rtrim($keys, ",");
        $values = rtrim($values, ",");
        
        $sql = "INSERT INTO {$this->getTableName()} ({$keys}) VALUES ({$values})";
        
        DB::getInstance()->execute($sql, $params, get_called_class());
        $this->id = DB::getInstance()->lastInsertId();

        return $this;
    }

    public function update() {

    }

    public function delete() {

    }
}
<?php
namespace app\engine;

use app\traits\TSingletone;

class Db
{
    protected $config = [
        'driver' => 'mysql',
        'host' => 'localhost:3306',
        'login' => 'admin',
        'password' => '123',
        'database' => 'phpBasicGB',
        'charset' => 'utf8'
    ];

    use TSingletone;

    protected $connection = null;

    protected function getConnection() 
    {
        if(is_null($this->connection)) {
            $this->connection = new \PDO($this->prepareDsnString(), 
            $this->config['login'],
            $this->config['password']
            );
            $this->connection->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC); 
        }
        
        return $this->connection;
    }

    protected function prepareDsnString() {
        return sprintf("%s:host=%s;dbname=%s;charset=%s",
        $this->config['driver'],
        $this->config['host'],
        $this->config['database'],
        $this->config['charset']
        );
    }

    public function lastInsertId() {
        return $this->connection->lastInsertId();
    }

    public function query($sql, $params) {
        $stmt = $this->getConnection()->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }

    public function queryOneObject($sql, $params, $class) {
        $stmt = $this->query($sql, $params);
        $stmt->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, $class);
        return $stmt->fetch();
    }

    public function queryOne($sql, $params = []) {
        return $this->query($sql, $params)->fetch();
    }

    public function queryAll($sql, $params = []) {
        return $this->query($sql, $params)->fetchAll();
    }

    public function queryLimit($sql, $limit) {
        $stmt = $this->getConnection()->prepare($sql);
        $stmt->bindValue(1, $limit, \PDO::PARAM_INT);
        $stmt->execute(); 
        return $stmt->fetchAll();
    }

    public function execute($sql, $params = []) {
        return $this->query($sql, $params)->rowCount();
    }
}
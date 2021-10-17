<?php #

namespace Engine\Core\Database;

use \PDO;
use \PDOException;
use Engine\Core\Config\Config;


Class Connection
{
    private $pdo;

    public function __construct()
    {
        $this->connect();
    }

    private function connect()
    {
        $config = Config::file('database'); 
        $dsn = 'mysql:host='.$config['host'].'; dbname='.$config['db_name'].'; charset='.$config['charset'];
        
        try
        {   $this->pdo = new PDO($dsn, $config['username'], $config['password'], 
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            //die(json_encode(array('outcome' => true)));
        }
        catch(PDOException $ex)
        {
            die(json_encode(array('outcome' => false, 'message' => 'Unable to connect')));
        }

        return $this;
    }

    public function execute($sql, $values = [])
    {
        $sth = $this->pdo->prepare($sql);
        return $sth->execute($values);
    }

    public function query($sql, $values = [], $statement = PDO::FETCH_OBJ)
    {
        $sth = $this->pdo->prepare($sql);
        
        $sth->execute($values);
    
        
        
        $result = $sth->fetchAll($statement);

        if ($result === false){
            return [];
        }
        //var_export($result);
        return $result;
    }

    public function lastInsertId()
    {
        $last_id = $this->pdo->lastInsertId();
        return $last_id;
    }
} 
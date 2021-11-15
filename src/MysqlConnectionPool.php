<?php

namespace src;

use ErrorException;

class MysqlConnectionPool
{
    private $dbconfig = [
        'host' => '127.0.0.1',
        'user' => 'root',
        'password' => 'root',
        'database' => 'test'
    ];

    /**
     * @var array
     * Connection pool
     * */
    private $dbpool;

    /**
     * @var int
     * Number of connections
     * */
    public $poolsize;

    public function __construct($poolsize = 20)
    {

        // 准备好数据库连接池“伪队列”
        $this->poolsize = $poolsize;
        $this->dbpool = array();
        for ($index = 1; $index <= $this->poolsize; $index++) {
            $conn = mysqli_connect($this->dbconfig ['host'], $this->dbconfig ['user'], $this->dbconfig ['password'], $this->dbconfig ['database']) or die ("<mark>连接数据库失败！</mark><br />");
            $this->dbpool[] = $conn;
        }
    }

    /**
     * 从数据库连接池中获取一个数据库链接资源
     *
     * @return mixed
     * @throws ErrorException
     */
    public function getConn()
    {
        if (count($this->dbpool) <= 0) {
            throw new ErrorException ("<mark>There are no linked resources in the database connection pool, please try again later!</mark>");
        } else {
            return array_pop($this->dbpool);
        }
    }

    /**
     * 将用完的数据库链接资源放回到数据库连接池
     *
     * @param $conn
     * @throws ErrorException
     */
    public function release($conn)
    {
        if (count($this->dbpool) >= $this->poolsize) {
            throw new ErrorException ("<mark>Database connection pool is full</mark><br />");
        } else {
            $this->dbpool[] = $conn;
        }
    }

}

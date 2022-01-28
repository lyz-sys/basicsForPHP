<?php

namespace learn\src\Db;

use ErrorException;
use learn\src\Config\Mysql as Config;

class MysqliConnect
{

    /**
     * @var array
     * Connection pool
     * */
    private array $dbpool;

    /**
     * @var int
     * Number of connections
     * */
    public int $poolsize;

    public function __construct(int $poolsize = 20)
    {
        $this->poolsize = $poolsize;
        $this->createDbPool();
    }

    /**
     * @param int $poolsize
     */
    public function setPoolsize(int $poolsize): void
    {
        $this->poolsize = $poolsize;
    }

    /**
     *
     * */
    private function createDbPool(): void
    {
        for ($index = 1; $index <= $this->poolsize; $index++) {
            $conn = mysqli_connect(Config::$host, Config::$username, Config::$password, Config::$database, Config::$port) or die ("<mark>Connection to Config failed！</mark><br />");
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
        }

        return array_pop($this->dbpool);
    }

    /**
     * 将用完的数据库链接资源放回到数据库连接池
     *
     * @param $conn
     * @throws ErrorException
     */
    public function release($conn): void
    {
        if (count($this->dbpool) >= $this->poolsize) {
            throw new ErrorException ("<mark>Database connection pool is full</mark><br />");
        }

        $this->dbpool[] = $conn;
    }

}

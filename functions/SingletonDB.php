<?php
class SingletonDB
{
    private static $instance = null;
    private $status = false;
    private function __construct()
    {
    }
    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    public function connect()
    {
        $this->status = true;
    }
    public function disconect()
    {
        $this->status = false;
    }
    public function fetch()
    {
        if ($this->status) {
            return file_get_contents("././response.json");
        } else {
            throw new Exception("Error db connection", 1);
        }
    }
    public function __destruct()
    {
        $this->disconect();
    }
    public function __get($name)
    { {
            if ($name === 'status') {
                return $this->status;
            } else {
                throw new Exception("Undefined property: $name", 1);
            }
        }
    }
}
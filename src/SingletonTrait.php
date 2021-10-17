<?php

namespace MirazMac\BanglaString;

/**
 * SingletonTrait
 */
trait SingletonTrait
{
    private $instance;

    protected function __construct()
    {
    }

    public function getInstance()
    {
        if (!self::$instance) {
            // new self() will refer to the class that uses the trait
            self::$instance = new self(func_get_args());
        }

        return self::$instance;
    }

    protected function __clone()
    {
    }

    protected function __sleep()
    {
    }

    protected function __wakeup()
    {
    }
}

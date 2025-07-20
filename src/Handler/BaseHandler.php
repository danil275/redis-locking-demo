<?php

declare(strict_types=1);

namespace Danil275\RedisLockingDemo\Handler;

abstract class BaseHandler
{
    protected $redis;

    protected $lockKey = 'base-lock';

    protected $lockTtl = 5;

    public function __construct()
    {
        $this->redis = new \Redis();
        $this->redis->connect($_ENV['REDIS_HOST'], (int)$_ENV['REDIS_PORT']);
    }

    abstract public function handle(): void;

    protected function lock(): bool
    {
        return $this->redis->set(
            $this->lockKey,
            '',
            ['NX', 'EX' => $this->lockTtl]
        );
    }

    protected function unlock(): void
    {
        $this->redis->del($this->lockKey);
    }
}
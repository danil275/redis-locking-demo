<?php

declare(strict_types=1);

namespace Danil275\RedisLockingDemo\Handler;

class DemoHandler extends BaseHandler
{

    private const SLEEP_TIME = 5;

    protected $lockKey = 'demo-lock';

    protected $lockTtl = self::SLEEP_TIME;

    public function handle(): void
    {
        if (!$this->lock()) {
            return;
        }

        sleep(self::SLEEP_TIME);

        $this->unlock();
    }
}
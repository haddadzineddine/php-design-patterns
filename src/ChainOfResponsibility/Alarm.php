<?php
namespace App\ChainOfResponsibility;

class Alarm extends HomeChecker
{
    public function handle(HomeStatus $status)
    {
        if (!$status->isAlarmOn()) {
            throw new \Exception('Alarm is not on');
        }

        $this->next($status);
    }
}

<?php
namespace App\ChainOfResponsibility;

class Locks extends HomeChecker
{
    public function handle(HomeStatus $status)
    {
        if (!$status->isLocked()) {
            throw new \Exception('The doors are not locked');
        }

        $this->next($status);
    }
}

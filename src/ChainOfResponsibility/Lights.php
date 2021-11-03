<?php
namespace App\ChainOfResponsibility;

class Lights extends HomeChecker
{
    public function handle(HomeStatus $status)
    {
        if (!$status->isLightOff()) {
            throw new \Exception('Light is not off');
        }

        $this->next($status);
    }
}

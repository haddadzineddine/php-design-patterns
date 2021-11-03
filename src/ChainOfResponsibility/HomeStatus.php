<?php
namespace App\ChainOfResponsibility;

class HomeStatus
{
    private $alarmOn = true;
    private $locked = true;
    private $lightOff = true;

    public function isLocked()
    {
        return $this->locked;
    }

    public function isAlarmOn()
    {
        return $this->alarmOn;
    }

    public function isLightOff()
    {
        return $this->lightOff;
    }
}

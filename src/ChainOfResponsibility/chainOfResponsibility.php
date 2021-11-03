<?php
namespace App\ChainOfResponsibility;

class chainOfResponsibility
{
    public static function run()
    {
        // You can do better than this :)

        $lights = new Lights;
        $alram = new Alarm;
        $locks = new Locks;
        $status = new HomeStatus;

        // just a simple chain of responsibility (lights->alarm->locks)
        $alram->succeedWith($locks);
        $lights->succeedWith($alram);

        $lights->handle($status);
    }
}

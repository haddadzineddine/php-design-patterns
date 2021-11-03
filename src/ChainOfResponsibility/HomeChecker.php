<?php
namespace App\ChainOfResponsibility;

abstract class HomeChecker
{
    protected $successor;

    abstract public function handle(HomeStatus $home);

    public function succeedWith(HomeChecker $successor)
    {
        $this->successor = $successor;
    }

    public function next(HomeStatus $status)
    {
        if (!$this->successor) {
            die('Terminate !' . PHP_EOL);
        }
        return $this->successor->handle($status);
    }
}

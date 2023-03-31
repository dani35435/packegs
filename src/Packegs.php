<?php
namespace Packegs;

use Src\View;

class Packegs
{
    public function hello(): string
    {
        return new View('site.hello');
    }

}

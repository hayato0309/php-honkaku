<?php

declare(strict_types=1);

trait SomeTraitA
{
    private $traitProperty;

    public function traitMethod($args1, $args2)
    {
        $this->traitProperty = 'A';
    }
}

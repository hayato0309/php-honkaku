<?php

declare(strict_types=1);

trait SomeTraitB
{
    private $traitProperty;

    public function traitMethod($args1, $args2)
    {
        $this->traitProperty = 'B';
    }
}

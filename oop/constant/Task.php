<?php

declare(strict_types=1);

class Task
{
    public const PRIORITY_LOW = 0;
    public const PRIORITY_MIDDLE = 1;
    public const PRIORITY_HIGH = 2;

    public $name;

    public $priority;

    public $progress;

    public function getPriorityAsString(): string
    {
        switch ($this->priority) {
            case self::PRIORITY_LOW:
                return '低';
                break;
            case self::PRIORITY_MIDDLE:
                return '中';
                break;
            case self::PRIORITY_HIGH:
                return '高';
                break;
        }
    }
}

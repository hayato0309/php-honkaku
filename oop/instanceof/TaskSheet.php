<?php

declare(strict_types=1);

require_once dirname(__FILE__) . '/Task.php';

class TaskSheet
{
    public $tasks = [];

    public function addTask($task): void
    {
        if ($task instanceof Task) {
            $this->tasks[] = $task;
        } else {
            throw new Exception('Task型のインスタンスしか追加できません。');
        }
        echo $task->name, 'を追加しました。', PHP_EOL;
    }

    public function show(): void
    {
        echo $task->name, PHP_EOL;
    }
}

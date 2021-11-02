<?php

declare(strict_types=1); ?>

<body>
    <?php
    class Task
    {
        public $name;

        public $extras = [];

        public function __set($name, $value)
        {
            $this->extras[$name] = $value;
        }

        public function __get($name)
        {
            return $this->extras[$name];
        }

        public function __toString()
        {
            $properties = 'タスク名：' . $this->name . PHP_EOL;
            foreach ($this->extras as $key => $value) {
                $properties .= $key . ':' . $value . PHP_EOL;
            }
            return $properties;
        }
    }

    $task = new Task();
    $task->placeFrom = '羽田';
    $task->placeTo = '福岡';
    echo $task;
    ?>
</body>
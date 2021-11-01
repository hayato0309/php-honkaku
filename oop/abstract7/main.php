<?php

declare(strict_types=1); ?>

<body>
    <?php
    abstract class Clock
    {
        private $time;

        public function __construct(int $time)
        {
            echo 'Clockクラスのコンストラクタが呼ばれました。' . PHP_EOl;
            $this->time = $time;
        }
    }

    class DigitalClock extends Clock
    {
        private $color;

        public function __construct(int $time, string $color)
        {
            echo 'DigitalClockクラスのコンストラクタが呼ばれました。' . PHP_EOL;
            $this->color = $color;
            parent::__construct($time);
        }
    }

    $currentTime = strtotime('2018-08-22 17:15');
    $digitalclock = new DigitalClock($currentTime, 'yellow');
    ?>
</body>
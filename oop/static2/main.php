<body>
    <?php
    require_once dirname(__FILE__) . '/ShoppingPoint.php';

    class WeekDayPoint
    {
        public function addWeekDayPoint(string $youbi)
        {
            if ($youbi === 'Fri') {
                ShoppingPoint::countUpPoint();
            }
        }
    }

    function addPricePoint(int $price)
    {
        if ($price >= 1000) {
            ShoppingPoint::countUpPoint();
        }
    }

    ShoppingPoint::$point = 0;

    ShoppingPoint::countUpPoint();

    $weekDayPoint = new WeekDayPoint();
    $weekDayPoint->addWeekDayPoint('Fri');

    addPricePoint(5000);

    echo '購入ポイント：', ShoppingPoint::$point;
    ?>
</body>
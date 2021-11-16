<?php

declare(strict_types=1); ?>

<body>
    <?php
    class SomeClass
    {
        public static function doStatic()
        {
        }

        public function doPublic()
        {
        }

        private function doPrivate()
        {
        }
    }

    $someClass = new SomeClass();

    var_dump(class_exists('SomeClass', false));  // true
    var_dump(class_exists('GhostClass', false)); // false

    require_once dirname(__FILE__) . '/classes/ExternalClass1.php';
    var_dump(class_exists('ExternalClass1', false)); // true
    var_dump(class_exists('ExternalClass2', false)); // false

    var_dump(method_exists($someClass, 'doPublic'));  // true
    var_dump(method_exists($someClass, 'doPrivate')); // true
    var_dump(method_exists('SomeClass', 'doPublic')); // true
    var_dump(method_exists('SomeClass', 'doPrivate')); // true
    var_dump(method_exists($someClass, 'doNothing')); // false

    var_dump(is_callable([$someClass, 'doPublic'])); // true
    var_dump(is_callable([$someClass, 'doPrivate'])); // false(Privateメソッドは呼べない)
    var_dump(is_callable([$someClass, 'doStatic'])); // true
    var_dump(is_callable([$someClass, 'doPrivate'], true)); // true(trueを指定しているので、コール可能かどうかを判定せず、存在だけを判定する)

    function calc()
    {
    }
    var_dump(is_callable('calc')); // true
    var_dump(function_exists('calc')); // true
    var_dump(function_exists('nothing')); // false
    ?>
</body>
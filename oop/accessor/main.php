<?php

declare(strict_types=1); ?>

<body>
    <pre>
        <?php
        require_once dirname(__FILE__) . '/Task.php';
        $task = new Task();

        $task->setName('パスポートの更新');
        echo 'タスク名：', $task->getName(), PHP_EOL;

        $task->setProgress(120);
        echo '進行度：', $task->getProgress(), PHP_EOL;

        $task->setProgress(80);
        $task->clearProgress();
        echo '進行度：', $task->getProgress, PHP_EOL;

        $task->completeProgress();
        echo '進行度：', $task->getProgress(), PHP_EOL;
        ?>
    </pre>
</body>
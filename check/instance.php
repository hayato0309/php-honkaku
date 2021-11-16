<?php

declare(strict_types=1); ?>

<body>
    <?php
    abstract class AbstractFile
    {
    }

    interface Drawable
    {
    }

    class Image extends AbstractFile implements Drawable
    {
    }

    class Pdf extends AbstractFile
    {
    }

    class Nothing
    {
    }

    $pdf = new Pdf();
    var_dump($pdf instanceof Pdf);          // true
    var_dump($pdf instanceof Image);        // false
    var_dump($pdf instanceof AbstractFile); // true
    var_dump($pdf instanceof Drawable);     // false

    $image = new Image();
    var_dump($image instanceof Pdf);          // false
    var_dump($image instanceof Image);        // true
    var_dump($image instanceof AbstractFile); // true
    var_dump($image instanceof Drawable);     // true

    $nothing = new Nothing();
    var_dump($nothing instanceof Pdf); // false
    var_dump($nothing instanceof Image); // false
    var_dump($nothing instanceof AbstractFile); // false
    var_dump($nothing instanceof Drawable); // false
    var_dump($nothing instanceof GhostClass); // false
    ?>
</body>
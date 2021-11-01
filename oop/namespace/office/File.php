<?php

declare(strict_types=1);

namespace Office;

require_once dirname(__FILE__) . '/Word/Writer.php';
require_once dirname(__FILE__) . '/Excel/Writer.php';

class File
{
    public function setWordProperty(): void
    {
        $writer = new Word\Writer();
        $writer->write();
    }

    public function setExcelProperty(): void
    {
        $writer = new Excel\Writer();
        $writer->write();
    }
}

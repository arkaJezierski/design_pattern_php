<?php

namespace App\Src;

use App\Interfaces\ReportGenerator;

class InventoryReport extends ReportGenerator
{
    protected function generateBody(): void
    {
        print "Generating inventory stock body...\n";
    }
}

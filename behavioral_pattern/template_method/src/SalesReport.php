<?php

namespace App\Src;

use App\Interfaces\ReportGenerator;

class SalesReport extends ReportGenerator
{
    protected function generateBody(): void
    {
        print "Generating sales data body...\n";
    }
}

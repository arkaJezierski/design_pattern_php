<?php

namespace App\Interfaces;

use App\Src\Invoice;
use App\Src\Order;
use App\Src\Report;

interface DocumentVisitor
{
    public function visitInvoice(Invoice $invoice): void;
    public function visitOrder(Order $order): void;
    public function visitReport(Report $report): void;
}

<?php

namespace App\Src;

use App\Interfaces\Visitorable;

class PdfExporterVisitor implements Visitorable
{
    public function visitInvoice(Invoice $invoice): void
    {
        echo "Exporting Invoice #{$invoice->number} as PDF (amount: {$invoice->amount})\n";
    }

    public function visitOrder(Order $order): void
    {
        echo "Exporting Order for {$order->customer} with " . count($order->items) . " items as PDF\n";
    }

    public function visitReport(Report $report): void
    {
        echo "Exporting Report '{$report->title}' as PDF\n";
    }
}

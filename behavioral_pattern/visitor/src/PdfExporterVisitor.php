<?php

namespace App\Src;

use App\Interfaces\Visitorable;

class PdfExporterVisitor implements Visitorable
{
    public function visitInvoice(Invoice $invoice): void
    {
        print "Exporting Invoice #{$invoice->number} as PDF (amount: {$invoice->amount})\n";
    }

    public function visitOrder(Order $order): void
    {
        print "Exporting Order for {$order->customer} with " . count($order->items) . " items as PDF\n";
    }

    public function visitReport(Report $report): void
    {
        print "Exporting Report '{$report->title}' as PDF\n";
    }
}

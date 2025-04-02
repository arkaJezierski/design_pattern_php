<?php

namespace App\Interfaces;

abstract class ReportGenerator
{
    public function generate(): void
    {
        $this->prepareData();
        $this->generateHeader();
        $this->generateBody();
        $this->generateFooter();
        $this->export();
    }

    protected function prepareData(): void
    {
        print "Preparing default data...\n";
    }

    protected function generateHeader(): void
    {
        print "Generating default header...\n";
    }

    abstract protected function generateBody(): void;

    protected function generateFooter(): void
    {
        print "Generating default footer...\n";
    }

    protected function export(): void
    {
        print "Exporting default report...\n\n";
    }
}

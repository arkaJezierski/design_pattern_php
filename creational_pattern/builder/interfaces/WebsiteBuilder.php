<?php

namespace App\Interfaces;

use App\Src\Website;

interface WebsiteBuilder
{
    public function addHeader(): void;
    public function addContent(): void;
    public function addFooter(): void;
    public function getWebsite(): Website;
}

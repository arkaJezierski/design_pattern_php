<?php

namespace App\Src;

use App\Interfaces\WebsiteBuilder;

class ShopWebsiteBuilder implements WebsiteBuilder
{
    private Website $website;

    public function __construct()
    {
        $this->website = new Website();
    }

    public function addHeader(): void
    {
        $this->website->addPart("Shop Header with Logo");
    }

    public function addContent(): void
    {
        $this->website->addPart("Product Grid");
    }

    public function addFooter(): void
    {
        $this->website->addPart("Checkout & Footer");
    }

    public function getWebsite(): Website
    {
        return $this->website;
    }
}

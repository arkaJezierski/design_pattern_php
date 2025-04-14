<?php

namespace App\Src;

use App\Interfaces\WebsiteBuilder;

class BlogWebsiteBuilder implements WebsiteBuilder
{
    private Website $website;

    public function __construct()
    {
        $this->website = new Website();
    }

    public function addHeader(): void
    {
        $this->website->addPart("Blog Header");
    }

    public function addContent(): void
    {
        $this->website->addPart("Articles Section");
    }

    public function addFooter(): void
    {
        $this->website->addPart("Comments + Footer");
    }

    public function getWebsite(): Website
    {
        return $this->website;
    }
}

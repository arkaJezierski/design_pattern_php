<?php

namespace App\Src;

use App\Interfaces\WebsiteBuilder;

class WebsiteDirector
{
    public function __construct(private WebsiteBuilder $builder) {}

    public function build(): Website
    {
        $this->builder->addHeader();
        $this->builder->addContent();
        $this->builder->addFooter();

        return $this->builder->getWebsite();
    }
}

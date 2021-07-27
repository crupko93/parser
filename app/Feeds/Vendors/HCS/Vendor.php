<?php

namespace App\Feeds\Vendors\HCS;

use App\Feeds\Processor\SitemapHttpProcessor;
use App\Feeds\Utils\Link;

class Vendor extends SitemapHttpProcessor
{
    protected array $first = [ 'https://himalayancrystallitez.com/sitemap.xml' ];
    protected const DELAY_S = 1;

    public function filterProductLinks( Link $link ): bool
    {
        return str_contains( $link->getUrl(), "products" );
    }
}

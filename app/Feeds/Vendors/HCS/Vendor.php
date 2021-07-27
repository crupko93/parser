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
        //$path = parse_url($link->getUrl())["path"];
        //$explode = explode('/', $path);

        return str_contains( $link->getUrl(), "products" );
    }

    /*public array $custom_products = [
        'https://himalayancrystallitez.com/collections/100-pure-essential-oils/products/100-pure-essential-oils-1-2oz-eucalyptus'
    ];*/
}

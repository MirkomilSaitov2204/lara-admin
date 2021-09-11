<?php


namespace App\Domain\Core;


interface ApiItemsResourceCollection
{
    const DATA          = 'data';
    const COUNT         = 'count';
    const TOTAL         = 'total';
    const PER_PAGE      = 'per_page';
    const LATS_PAGE     = 'last_page';
    const PAGINATION    = 'pagination';
    const TOTAL_PAGES   = 'total_pages';
    const CURRENT_PAGE  = 'current_page';
}

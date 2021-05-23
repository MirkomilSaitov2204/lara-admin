<?php

namespace App\Domain\PostCategory\Exports;

use Illuminate\Database\Eloquent\Builder;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class PostCategoryExport implements WithHeadings, FromQuery, WithMapping, ShouldAutoSize
{
    protected $postCategories;

    public function __construct(Builder $query)
    {
        $this->postCategories = $query;
    }

    public function headings(): array
    {
        return [
            'ID',
            'Name'
        ];
    }

    public function query()
    {
        return $this->postCategories;
    }

    public function map($postCategory): array
    {
        $id = $postCategory->id;
        $ex = explode(',', $postCategory->name);


        return [
            $id, $ex[1]
        ];
    }
}

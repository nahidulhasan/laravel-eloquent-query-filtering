<?php
namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;
use NahidulHasan\EloquentFilter\QueryFilters;

class ArticleFilters extends QueryFilters
{

    /**
     * Filter by Name.
     *
     * @param $title
     * @return Builder
     * @internal param $name
     * @internal param string $level
     */
    public function title($title)
    {
        return $this->builder->where('title', 'like', '%' .$title.'%');
    }

}
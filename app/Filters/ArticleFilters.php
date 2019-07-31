<?php

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

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
    public function searchByTitle($title)
    {
        return $this->builder->where('title', 'like', '%' .$title.'%');
    }

}
<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use NahidulHasan\EloquentFilter\Filterable;

class Article extends Model
{
    use Filterable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'body'
    ];
}

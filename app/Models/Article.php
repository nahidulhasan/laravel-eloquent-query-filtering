<?php
namespace App\Models;

use App\Traits\Filterable;
use Illuminate\Database\Eloquent\Model;

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

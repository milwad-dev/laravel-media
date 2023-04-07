<?php

namespace Milwad\LaravelMedia\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    /**
     * Case columns.
     *
     * @var string[]
     */
    protected $casts = ['files' => 'json'];
}
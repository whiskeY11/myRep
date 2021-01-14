<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TodoItem extends Model
{
    protected $table = "list";
    protected $fillable = [
        'nazov', 'popis',
    ];
}

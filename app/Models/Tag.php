<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
<<<<<<< HEAD

    protected $guarded = [
        'id',
        'name'
    ];
=======
    protected $guarded = array('id','name');
>>>>>>> origin/main
}

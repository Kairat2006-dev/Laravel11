<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compani extends Model
{
    use HasFactory;

    protected $table = 'compani';
    public function profile()
    {
        return $this->morphOne(Profile::class,'profileable');
    }
}

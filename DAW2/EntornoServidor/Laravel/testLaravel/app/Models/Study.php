<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'name', 'abreviation'];

    public function __toString()
    {
        return "" . $this->id;
    }
}
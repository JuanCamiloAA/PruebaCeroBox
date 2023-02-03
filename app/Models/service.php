<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    use HasFactory;
    public $table = 'service';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'State',
    ];
    
    public $timestamps = true;
}

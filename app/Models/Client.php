<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    
    public $table = 'client';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'Document',
        'Phone',
        'Observation',
        'email',
        'password',
        'State',
    ];
    
    public $timestamps = true;
    
    public function servicio(){
        return $this->hasOne('App\Models\detalle_service', 'id', 'Service_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detalle_service extends Model
{
    use HasFactory;
    public $table = 'detalle_service';

    protected $primaryKey = 'id';

    protected $fillable = [
        'Client_id',
        'Service_id',
        'Type',
        'Observations',
        'Date_start',
        'Date_end',
    ];
    
    public $timestamps = true;
    
    public function servicio(){
        return $this->hasOne('App\Models\service', 'id', 'Service_id');
    }
}

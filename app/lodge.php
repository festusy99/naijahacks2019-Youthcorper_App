<?php
  
namespace App;
   
use Illuminate\Database\Eloquent\Model;
   
class Lodge extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lodge_name', 'lodge_type', 'description', 'state', 'local_govt', 'address', 'agent_id'
    ];

    public function user() {
        return $this->belongsTo(\App\User::class, 'agent_id');
    }
}
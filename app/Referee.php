<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referee extends Model
{
    protected $table = 'referees';
    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $appends = ['full_name'];
    
    public function profile() {
        return $this->belongsTo(Profile::class);
    }

    public function getFullNameAttribute()
    {
        $others = $this->other_names ?: '';
        return "{$this->first_name} {$this->middle_name} {$others}";
    }
}

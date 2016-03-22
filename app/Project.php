<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Project extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'client_id', 'type', 'description',
        'start', 'end', 'cost', 'milestone', 'status'
    ];

    /**
     * Client that belongs to the project
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function client()
    {
        return $this->belongsTo(User::class, 'client_id');
    }


    /**
     * Set the statues attribute before persisting it .
     *
     * @param  string  $value
     * @return string
     */
    public function setStatusAttribute($value)
    {
        $this->attributes['status'] = ($value == 'on') ? $value = 1 : $value = 0;
    }

    /**
     * Get the statues attribute before persisting it .
     *
     * @param  string  $value
     * @return string
     */
    public function getStatusAttribute($value)
    {
        $this->attributes['status'] = ($value == 'on') ? $value = 1 : $value = 0;
    }
}
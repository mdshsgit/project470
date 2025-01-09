<?php

// app/Models/Group.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description', // Add other attributes you want to be mass assignable
    ];
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}

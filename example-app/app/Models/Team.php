<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Team extends Model
{
    use HasFactory;

    protected $filelable = [
        'id',
        'name'
    ];

    public function users()
    {
        return $this->belongsToMany(Users::class);
    }
}

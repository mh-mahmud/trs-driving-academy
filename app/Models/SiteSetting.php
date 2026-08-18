<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $guarded = [];
    protected function casts(): array { return ['hero_badges'=>'array','hero_stats'=>'array']; }
}

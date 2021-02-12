<?php

namespace App\Models;

use App\Models\Qualifiers\Media;
use App\Models\Producers\Creator;
use Dyrynda\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Series extends Model
{
    use SoftDeletes, CascadeSoftDeletes;

    protected $table = 'series';
    protected $dates = ['deleted_at'];
    protected $cascadeDeletes = ['creator_series', 'seasons'];
//    protected $arrLetterExist = [];

    public function media()
    {
        return $this->belongsToMany(Media::class)->withPivot('active');
    }

    public function creators()
    {
        return $this->belongsToMany(Creator::class)->withPivot('order');
    }

    public function seasons()
    {
        return $this->hasMany(Season::class);
    }

}

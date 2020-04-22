<?php

namespace App;

use App\Observers\ItemObserver;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Items
 * @package App
 *
 * @property string $title
 * @property boolean $done
 */
class Items extends Model
{
    protected $fillable = ['title', 'done'];
}

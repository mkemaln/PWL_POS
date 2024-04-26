<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use App\Models\StokModel;
use App\Models\LevelModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class UserModel extends Model implements Authenticatable
{
    use HasFactory, AuthenticatableTrait;

    protected $table = 'm_user';
    protected $primaryKey = 'user_id';

    protected $fillable = ['level_id', 'username', 'nama', 'password'];

    public function level(): BelongsTo
    {
        return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    }
}
<?php

namespace App\Models\Eloquent;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $gender_id
 * @property int $parent_id
 */
final class ParentRoleGender extends Model
{
    use HasFactory;

    protected $table = "parent_role_gender";
    public $timestamps = false;
}

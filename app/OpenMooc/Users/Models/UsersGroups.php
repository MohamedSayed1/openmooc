<?php
namespace OpenMooc\Users\Models;

use Illuminate\Database\Eloquent\Model;

class UsersGroups extends Model
{
    protected $table = 'users_groups';
    protected $primaryKey = 'group_id';
}
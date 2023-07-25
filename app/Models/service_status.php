<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * @property int $id
 * @property string $status
 * @property string $services
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class service_status extends Model
{
    use HasFactory;
}

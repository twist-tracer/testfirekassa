<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $code
 * @property string $message
 * @property string $transport
 */
class SMS extends Model
{
    public const CODE_REMIND = 'REMIND';
    public const CODE_REGISTER = 'REGISTER';

}

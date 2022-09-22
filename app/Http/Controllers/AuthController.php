<?php

namespace App\Http\Controllers;

use App\Models\SMS;
use App\Services\Messenger\TransportManager;
use Illuminate\Routing\Controller as BaseController;

class AuthController extends BaseController
{
    public function remind(TransportManager $transport)
    {
        /** @var SMS $sms */
        $sms = SMS::query()
            ->where('code', SMS::CODE_REMIND)
            ->first();

        $transport->driver($sms->transport)->send();
    }
}

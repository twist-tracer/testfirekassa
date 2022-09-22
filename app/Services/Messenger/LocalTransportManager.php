<?php

namespace App\Services\Messenger;

use App\Services\Messenger\Senders\Local1Sender;
use App\Services\Messenger\Senders\SenderInterface;
use Illuminate\Support\Manager;

class LocalTransportManager extends Manager
{
    public function createUKDriver(): SenderInterface
    {
        return new Local1Sender();
    }

    public function getDefaultDriver(): ?string {
        return null;
    }
}

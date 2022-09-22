<?php

namespace App\Services\Messenger\Senders;

interface SenderInterface
{
    public function send(): void;
}

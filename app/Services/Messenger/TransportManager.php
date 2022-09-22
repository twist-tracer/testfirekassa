<?php

namespace App\Services\Messenger;

use App\Services\Messenger\Senders\RemoteSender;
use App\Services\Messenger\Senders\SenderInterface;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\Manager;

class TransportManager extends Manager
{
    protected $container;
    protected $localManager;

    public function __construct(
        Container $container,
        LocalTransportManager $localManager
    )
    {
        parent::__construct($container);
        $this->localManager = $localManager;
    }

    public function createLocalDriver(): SenderInterface
    {
        return new config('sms.');
    }

    public function createRemoteDriver(): SenderInterface
    {
        return new RemoteSender();
    }

    public function getDefaultDriver(): ?string {
        return null;
    }
}

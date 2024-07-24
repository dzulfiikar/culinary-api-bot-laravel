<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram\Bot\Api;
use Telegram\Bot\Objects\Update;

class BotController extends Controller
{
    protected Api $telegram;

    public function __construct(Api $telegram)
    {
        $this->telegram = $telegram;
    }

    public function show()
    {
        $response = $this->telegram->getUpdates();

        return $response;
    }

    public function handleWebhook()
    {
        $this->telegram->commandsHandler(true);
    }
}

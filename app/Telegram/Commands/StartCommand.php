<?php

namespace App\Telegram\Commands;

use Telegram\Bot\Commands\Command;

class StartCommand extends Command
{
    protected string $name = 'start';
    protected string $description = 'Start command to get you started!';

    public function handle()
    {
        $this->replyWithMessage([
            'text' => 'Welcome to our bot!',
        ]);
    }
}

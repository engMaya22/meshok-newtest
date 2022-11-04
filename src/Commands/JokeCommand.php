<?php

namespace Meshoko\Commands;

use GuzzleHttp\Client;
use Illuminate\Console\Command;

class JokeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'joke';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $client = new Client();
        $response = $client->request('GET','https://icanhazdadjoke.com/',[
        'header'=>[
            'Accept'=>'text/plain',
        ],
        ]);

        $this->info((string)$response->getBody());
    }

}

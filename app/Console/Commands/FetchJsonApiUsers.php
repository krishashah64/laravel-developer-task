<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class FetchJsonApiUsers extends Command
{
    protected $signature = 'api:fetch-users';
    protected $description = 'Fetch users from external API and store them locally';

    public function handle()
    {
        $response = Http::withoutVerifying()->get('https://jsonplaceholder.typicode.com/users');

        if (!$response->successful()) {
            $this->error('Failed to fetch users.');
            return 1;
        }

        foreach ($response->json() as $externalUser) {
            User::updateOrCreate(
                ['email' => $externalUser['email']],
                [
                    'name' => $externalUser['name'],
                    'password' => bcrypt('external'), // dummy
                    'role' => 'external',
                    'source' => 'api',
                ]
            );
        }

        $this->info('External users synced!');
        return 0;
    }
}

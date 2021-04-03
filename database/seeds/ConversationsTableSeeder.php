<?php

use App\Conversation;
use Illuminate\Database\Seeder;

class ConversationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Conversation::create([
            'user_id' => 1,
            'contact_id' => 2,
            'last_message' => null,
            'last_time' => null,
            // 'listen_notifications' => true,
            // 'has_blocked' => 1,
        ]);

        Conversation::create([
            'user_id' => 1,
            'contact_id' => 3,
            'last_message' => null,
            'last_time' => null,
            // 'listen_notifications' => true,
            // 'has_blocked' => 1,
        ]);

        Conversation::create([
            'user_id' => 2,
            'contact_id' => 1,
            'last_message' => null,
            'last_time' => null,
            // 'listen_notifications' => true,
            // 'has_blocked' => 1,
        ]);

        Conversation::create([
            'user_id' => 3,
            'contact_id' => 1,
            'last_message' => null,
            'last_time' => null,
            // 'listen_notifications' => true,
            // 'has_blocked' => 1,
        ]);
    }
}

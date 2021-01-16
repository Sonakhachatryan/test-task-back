<?php
namespace App\Services;

use App\Models\Message;
use Illuminate\Support\Facades\Mail;

class MessageService
{
    /**
     * Create new message
     *
     * @param $data
     * @return mixed
     */
    public function createMessage($data)
    {
        $message = Message::create([
            'name' => $data->name,
            'email' => $data->email,
            'message' => $data->message,
            'widget_id' => $data->widget_id,
        ]);

        return $message;
    }

    /**
     * Send message
     *
     * @param $data
     */
    public function sendMessage($data)
    {
        Mail::to($data->email)->send(new \App\Mail\Message($data->message));
    }
}

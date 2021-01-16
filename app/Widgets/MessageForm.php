<?php

namespace App\Widgets;

use App\Models\Message;
use Arrilot\Widgets\AbstractWidget;

class MessageForm extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $messages = Message::where('widget_id', $this->config['widget_id'])
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('widgets.message_form', [
            'config' => $this->config,
            'messages' => $messages
        ]);
    }
}

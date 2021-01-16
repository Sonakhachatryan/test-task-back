<?php
namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest;
use App\Services\MessageService;
use Illuminate\Support\Facades\Session;


class MessageController extends Controller
{

    protected $messageService;

    /**
     * HomeController constructor.
     * @param MessageService $messageService
     */
    public function __construct(MessageService $messageService)
    {
        $this->messageService = $messageService;
    }

    /**
     * Save and send message
     *
     * @param MessageRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function sendAndSaveMessage(MessageRequest $request)
    {
        try {
            $this->messageService->createMessage($request);

            $this->messageService->sendMessage($request);

            Session::flash('success', 'Message sent successfully!!!!!!!');

        }catch (\Exception $e){
            Session::flash('error', 'Something went wrong.Please try again.');
        }

        return back();
    }

    /**
     * Send email
     *
     * @param MessageRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function sendMessage(MessageRequest $request)
    {
        try {
            $this->messageService->sendMessage($request);

            return response()->json('success', 200);
        }catch (\Exception $e){
            return response()->json($e->getMessage(), 500);
        }

    }
}

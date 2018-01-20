<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use Illuminate\Http\Request;
class contact extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {

        return $this->view('emails.contact')->with([
            'sendername' => $request->sendername,
            'senderphone' => $request->senderphone,
            'sendermail' => $request->sendermail,
            'senderemail' => $request->senderemail,
            'senderphone' => $request->senderphone,
        ]);
    }




}

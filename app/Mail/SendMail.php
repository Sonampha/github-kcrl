<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\request;

class SendMail extends Mailable
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
    public function build(request $request)
    {
        return $this->view('pages.mail-message',['msg'=>$request->message,'email'=>$request->email,'name'=>$request->name,'phone'=>$request->phone])
                ->from('pech.sopha@kcairlines.com', 'KC International Airlines Co.,Ltd')
                ->to('sonampha@gmail.com')
                ->cc($request->email)
                ->subject('A Message from Contact Website');
    }
}

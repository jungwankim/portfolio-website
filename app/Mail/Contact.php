<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $name;
    public $email;
    public $body;

    public function __construct(Request $request)
    {
        //
        $this->name = $request->name;
        $this->email = $request->email;
        $this->body = $request->body;
    }

    /**
     * Build the message.
     *
     * @return $this
     */ 
    public function build()
    {
        return $this->view('adminLayouts.contact', compact('name','email','body'));
    }
}

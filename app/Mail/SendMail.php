<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;
    public $order;
    public $order_id;
    public $packagestotal = 0;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       

        
        // dd($this->details['id_order']);
        // $this->order_id = $this->details['id_order'];
        // $this->total=Order::where('order_id', $this->details['id_order'])->first();
        return $this->subject($this->details['title'])
            ->view('mail.sendmail');
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendSalesMailStaff extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
     public function __construct($subject, $user, $carts, $countall, $bikou, $mailto)
     {
         $this->subject = $subject;
         $this->user = $user;
         $this->carts = $carts;
         $this->countall = $countall;
         $this->bikou = $bikou;
         $this->mailto = $mailto;
     }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->mailto)
                    ->text('mail.sales_mail_staff_text')
                    ->with([
                        'subject' =>$this->subject,
                        'user' =>$this->user,
                        'carts' =>$this->carts,
                        'countall' =>$this->countall,
                        'bikou' =>$this->bikou,
                    ]);
    }
}

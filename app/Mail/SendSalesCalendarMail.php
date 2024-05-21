<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendSalesCalendarMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
     public function __construct($subject, $user, $carts, $countall, $bikou, $doukonbutu_kbn1, $doukonbutu_kbn2, $doukonbutu_kbn3)
     {
         $this->subject = $subject;
         $this->user = $user;
         $this->carts = $carts;
         $this->countall = $countall;
         $this->bikou = $bikou;
         $this->doukonbutu_kbn1 = $doukonbutu_kbn1;
         $this->doukonbutu_kbn2 = $doukonbutu_kbn2;
         $this->doukonbutu_kbn3 = $doukonbutu_kbn3;
     }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->text('mail.calendar.sales_mail_text')
                    ->from('mt@cues-plus.com', 'キューズプラス')
                    ->with([
                        'subject' =>$this->subject,
                        'user' =>$this->user,
                        'carts' =>$this->carts,
                        'countall' =>$this->countall,
                        'bikou' =>$this->bikou,
                        'doukonbutu_kbn1' =>$this->doukonbutu_kbn1,
                        'doukonbutu_kbn2' =>$this->doukonbutu_kbn2,
                        'doukonbutu_kbn3' =>$this->doukonbutu_kbn3,
                    ]);
    }
}

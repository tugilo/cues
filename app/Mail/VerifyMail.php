<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VerifyMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($host, $subject, $passwd, $urltoken)
    {
        $this->host = $host;
        $this->subject = $subject;
        $this->passwd = $passwd;
        $this->urltoken = $urltoken;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('mt@cues-plus.com', 'キューズプラス')
                    ->text('mail.verify_mail_text')
                    ->with([
                        'host' =>$this->host,
                        'subject' =>$this->subject,
                        'passwd' =>$this->passwd,
                        'urltoken' =>$this->urltoken,
                    ]);
    }
}

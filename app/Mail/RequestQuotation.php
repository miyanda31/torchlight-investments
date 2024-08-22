<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RequestQuotation extends Mailable
{
    use Queueable, SerializesModels;


    public string $email,$name,$body;
    public array $services;

    /**
     * Create a new message instance.
     * @param string $email
     * @param string $name
     * @param string $body
     * @param array $services
     */
    public function __construct(string $email, string $name, string $phone, array $services)
    {
        //
        $this->email = $email;
        $this->name = $name;
        $this->body = $phone;
        $this->services = $services;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address($this->email,$this->name),
            to: env('MAIL_FROM_ADDRESS'),
            subject: 'Request For Quotation',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mails.request-quotation',
        );
    }
}

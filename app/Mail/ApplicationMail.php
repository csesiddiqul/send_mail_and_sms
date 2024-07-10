<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailables\Address;
class ApplicationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $url, $users, $applicant_name, $program_name, $program_type, $program_subject, $email_address, $mobile_number, $application_date, $application_number;

    /**
     * Create a new message instance.
     */
    public function __construct($url, $users, $data)
    {
        $this->url = $url;
        $this->users = $users;

        $this->applicant_name = $data['applicant_name'];
        $this->program_name = $data['program_name'];
        $this->program_type = $data['program_type'];
        $this->program_subject = $data['program_subject'];
        $this->email_address = $data['email_address'];
        $this->mobile_number = $data['mobile_number'];
        $this->application_date = $data['application_date'];
        $this->application_number = $data['application_number'];
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
//            from: new Address('jeffrey@example.com', 'Jeffrey Way'),
            subject: 'Application Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.application_mail',
            with: [
                'urlGoogle' => $this->url,
                'users' => $this->users,
            ],
        );

    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}

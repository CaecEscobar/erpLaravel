<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderPdfMail extends Mailable
{
    use Queueable, SerializesModels;

    public array $data;
    protected string $pdfBytes;
    protected string $filename;

    public function __construct(array $data, string $pdfBytes, string $filename)
    {
        $this->data = $data;
        $this->pdfBytes = $pdfBytes;
        $this->filename = $filename;
    }

    public function build()
    {
        return $this->subject('Presupuesto '.$this->data['folio'])
            ->markdown('emails.order-pdf')
            ->attachData($this->pdfBytes, $this->filename, ['mime' => 'application/pdf']);
    }
}

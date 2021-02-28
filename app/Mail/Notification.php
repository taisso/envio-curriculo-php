<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Resume;
use Illuminate\Support\Facades\Storage;

class Notification extends Mailable
{
    use Queueable, SerializesModels;

    protected $resume;
    protected $file;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($resume, $file)
    {
        $this->resume = $resume;
        $this->file = $file;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
        return $this->from('testecurriculo075@gmail.com')->
            view('emails.notification')->subject('Envio de currículo')->with([
            'name' => $this->resume->name,
            'email' => $this->resume->email,
            'telephone' => $this->resume->telephone,
            'schooling' => $this->resume->schooling,
            'office' => $this->resume->office,
            'date' => now()->setTimezone('America/Sao_paulo')->format('d-m-Y H:i:s')

        ])->attach($this->file->getRealPath(), [
            'as'=>$this->file->getClientOriginalName(),
            'mime'=>$this->file->getMimeType()
        ]);
    }
}

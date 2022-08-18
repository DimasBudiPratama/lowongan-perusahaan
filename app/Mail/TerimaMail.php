<?php

namespace App\Mail;

use App\Models\Jadwal;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TerimaMail extends Mailable
{
    use Queueable, SerializesModels;

    public $jadwal;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Jadwal $jadwal)
    {
        $this->jadwal = $jadwal;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('cnezuko8@gmail.com')
                    ->subject('Lolos Seleksi Berkas!!')
                    ->markdown('emails.wawancara')
                    ->with([
                        'waktu'     => $this->jadwal->waktu,
                        'jenis'     => $this->jadwal->jenis,
                        'tempat'     => $this->jadwal->tempat,
                    ]);
    }
}

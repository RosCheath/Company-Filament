<?php

namespace App\Http\Livewire;

use App\Models\ContactMessage;
use Filament\Notifications\Notification;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Contact extends Component
{
    use LivewireAlert;
    public $name;

    public $email;

    public $subject;

    public $message;

    public function store()
    {
        $contact = new ContactMessage();
        $contact->name = $this->name;
        $contact->email = $this->email;
        $contact->subject = $this->subject;
        $contact->message = $this->message;
        $contact->save();
//        session()->flash('success', 'Your contact has been send.');
        $this->alert('success', 'Your contact has been send.');
        $this->reset(['subject', 'message']);
    }

    public function render()
    {
        return view('livewire.contact');
    }
}

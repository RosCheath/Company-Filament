<?php

namespace App\Http\Livewire;

use App\Models\ContactMessage;
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
        $contact = $this->validate([
            'name' => 'required|max:255',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
        ContactMessage::create($contact);
        $this->alert('success', 'Your contact has been send.');
        $this->reset(['subject', 'message']);
    }

    public function render()
    {
        return view('livewire.contact');
    }
}

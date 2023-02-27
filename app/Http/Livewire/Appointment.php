<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Appointment extends Component
{
    use LivewireAlert;

    public $name;

    public $email;

    public $phone;

    public $service_id;

    public $message;

    public function store()
    {
        $appointment = $this->validate([
            'name' => 'required|max:50',
            'email' => 'required|max:30',
            'phone' => 'required|max:15',
            'service_id' => 'required',
            'message' => 'required',
        ]);
        \App\Models\Appointment::create($appointment);
        $this->alert('success', 'Your appointment has been send.');
        $this->reset();
    }

    public function render()
    {
        $service = Service::all()->where('is_public', '=', '1');
        return view('livewire.appointment', compact('service'));
    }
}

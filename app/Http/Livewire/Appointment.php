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
        $appointment = new \App\Models\Appointment();
        $appointment->name = $this->name;
        $appointment->email = $this->email;
        $appointment->phone = $this->phone;
        $appointment->service_id = $this->service_id;
        $appointment->message = $this->message;
        $appointment->save();
        $this->alert('success', 'Your appointment has been send.');
        $this->reset();
    }

    public function render()
    {
        $service = Service::all()->where('is_public', '=', '1');

        return view('livewire.appointment', compact('service'));
    }
}

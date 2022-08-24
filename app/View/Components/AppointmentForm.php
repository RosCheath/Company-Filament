<?php

namespace App\View\Components;

use App\Models\Home_Carousel;
use Illuminate\View\Component;

class AppointmentForm extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $appointment_carousel = Home_Carousel::all()->where('is_public', '=', '1')->first();
        return view('components.appointment-form',compact('appointment_carousel'));
    }
}

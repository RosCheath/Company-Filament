<?php

namespace App\View\Components;

use App\Models\Service;
use Illuminate\View\Component;

class ServiceRandom extends Component
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
        $RandonService = Service::inRandomOrder()->limit(4)->where('is_public', '1')->get();
        return view('components.service-random',compact('RandonService'));
    }
}

<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Certificate extends Component
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
        $certificate = \App\Models\Certificate::all();

        return view('components.certificate', compact('certificate'));
    }
}

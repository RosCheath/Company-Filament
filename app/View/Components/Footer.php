<?php

namespace App\View\Components;

use App\Models\Feed;
use App\Models\Service;
use App\Models\Topbar;
use Illuminate\View\Component;

class Footer extends Component
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
        $servic_count = Service::all()->where('is_public', 1)->count();
        $feed_count = Feed::all()->where('is_public', 1)->count();
        $footer = Topbar::all();

        return view('components.footer', compact(
            'servic_count',
            'feed_count',
            'footer'
        ));
    }
}

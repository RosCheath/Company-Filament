<?php

namespace App\View\Components;

use App\Models\Feed;
use Illuminate\View\Component;

class FeedRandom extends Component
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
        $RandonFeed = Feed::all()->where('is_public', '1')->random(4);
        return view('components.feed-random',compact('RandonFeed'));
    }
}

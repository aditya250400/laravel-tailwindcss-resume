<?php

namespace App\View\Components\Home;

use Illuminate\Support\Arr;
use Illuminate\View\Component;

class Portofolio extends Component
{
    public array $items = [];

    public array $tabs = [];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->items = [
            [
                
                'image' => url('/img/portofolio1.png')
                
            ],
            [
                
                'image' => url('/img/portofolio2.png')
                
            ],
            [
                
                'image' => url('/img/portofolio3.png')
                
            ],
            [
                
                'image' => url('/img/portofolio4.png')
                
            ],
            [
                
                'image' => url('/img/portofolio5.png')
                
            ],
            [
                
                'image' => url('/img/portofolio6.jpg')
                
            ],
            [
                
                'image' => url('/img/portofolio7.png')
                
            ],
            [
                
                'image' => url('/img/portofolio8.png')
                
            ],
            [
                
                'image' => url('/img/portofolio9.png')
                
            ],
            [
                
                'image' => url('/img/portofolio10.png')
                
            ],
            [
                
                'image' => url('/img/portofolio11.png')
                
            ],
        ];

        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.portofolio');
    }
}

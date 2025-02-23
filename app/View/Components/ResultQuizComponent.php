<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ResultQuizComponent extends Component
{

    // public $data;

    // public function __construct($data)
    // {
    //     $this->data = $data;
    // }
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.result-quiz-component');
    }
}

<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class alert extends Component
{
    public $tipoAlerta;
    /**
     * Create a new component instance.
     */
    public function __construct(string $tipoAlerta)
    {
        $this->tipoAlerta =$tipoAlerta;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}

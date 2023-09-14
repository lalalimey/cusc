<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Modal extends Component
{
    public $id;
    public $maxWidth;

    /**
     * Create a new component instance.
     */
    public function __construct($id = null, $maxWidth = '2xl')
    {
        $this->id = $id;
        $this->maxWidth = $maxWidth;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.modal', [
            'id' => $this->id,
            'maxWidth' => $this->maxWidth,
        ]);
    }
}

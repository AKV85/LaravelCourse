<?php

namespace App\View\Components\Forms\Buttons;

use Illuminate\Database\Eloquent\Model;
use Illuminate\View\Component;

class Action extends Component
{



    /**
     * Show or hide the Atgal button.
     *
     * @var bool
     */

    public function __construct(public string $mainRoute, public Model $model, public bool $showBack = false)
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
        return view('components.forms.buttons.action');
    }
}

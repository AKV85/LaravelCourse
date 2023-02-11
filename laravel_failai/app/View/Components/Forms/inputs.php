<?php

namespace App\View\Components\forms;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;
use Illuminate\View\Component;

class inputs extends Component
{
    public array $fields;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public Model $model, string $fields)
    {
        $this->fields = explode(',', $fields);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return Application|Factory|View
     */
    public function render(): View|Factory|Application
    {
        return view('components.forms.inputs');
    }
}

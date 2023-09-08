<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputNormalSelect extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        protected string $lenght,
        protected string $name,
        protected string $label,
        protected string $origin,
        protected array $data
    ) {

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $data = [];

        switch ($this->origin) {
            case 'fornecedores':
                # code...
                break;

            case 'portes':
                # code...
                break;

            default:
                # code...
                break;
        }

        return view('components.app.input-normal-select', [
            "lenght" => $this->lenght,
            "name" => $this->name,
            "label" => $this->label,
            "origin" => $this->origin,
            "data" => $this->data,
        ]);
    }
}

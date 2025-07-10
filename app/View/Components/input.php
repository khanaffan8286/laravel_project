<?php

namespace App\View\Components;

use Illuminate\View\Component;

class input extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $type;
    public $id;
    public $name;
    public $placeholder;
    public $label;
    public $var;
    public function __construct($type, $name,$placeholder,$label ,$var=''  )
    {
        $this->type = $type;
    
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->label = $label;

        $this->var = $var;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input');
    }
}

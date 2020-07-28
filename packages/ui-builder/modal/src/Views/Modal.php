<?php
namespace UiBuilder\Modal\Views;

use Illuminate\View\Component;

class Modal extends Component
{
    public bool $hide;

    public function __construct(bool $hide = true)
    {
        $this->hide = $hide;
    }
    public function render()
    {
        if( $this->hide )
        {
            return "<div class='hidden'></div>";
        }

        return view('modal::basic');
    }
}
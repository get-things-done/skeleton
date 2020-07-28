<?php
namespace UiBuilder\Modal\Views\Buttons;

use Illuminate\View\Component;

class Cancel extends Component
{
    public string $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function render()
    {
        return view('modal::buttons.cancel');
    }
}
<?php
namespace UiBuilder\Card\Views;

use Illuminate\View\View;
use Illuminate\View\Component;

abstract class Card extends Component
{
    public string $size;
    
    public function __construct(string $size = 'w-full')
    {
        $this->size = $size;
    }
}
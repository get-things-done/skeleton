<?php
namespace UiBuilder\Card\Views;

use Illuminate\View\Component;

class Stacked extends Card
{
    public function render()
    {
        return view('card::stacked');
    }
}
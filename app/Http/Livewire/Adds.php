<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Adds extends Component
{
    public $title;
    public $penerbit;
    public $terbit;
    public function render()
    {
        return view('livewire.add');
    }
    public function save()
    {
        $input = $this->validate([
            'title' => 'required',
            'penerbit' => 'required',
            'terbit'  => 'required|date_format:Y-m-d'
        ]);
    }
}

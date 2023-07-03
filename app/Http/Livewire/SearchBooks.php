<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SearchBooks extends Component
{
    public $searchTerm = '';
    public $books = [];

    public function search()
    {
        $response = Http::get('https://www.googleapis.com/books/v1/volumes', [
            'q' => $this->searchTerm,
        ]);

        $data = $response->json();

        if (isset($data['items'])) {
            $this->books = $data['items'];
        } else {
            $this->books = [];
        }
    }
    public function render()
    {
        return view('livewire.search-books');
    }
}

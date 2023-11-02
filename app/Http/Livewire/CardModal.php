<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CardModal extends Component
{
    public $modalTitle, $modalContent, $buttonColor;
    public $showingModal = false;

    public function mount($modalTitle, $modalContent, $buttonColor)
    {
        $this->modalTitle = $modalTitle;
        $this->modalContent = $modalContent;
        $this->buttonColor = $buttonColor;
        $this->showingModal = false;
    }

    public function show()
    {
        $this->showingModal = true;
    }

    public function render()
    {
        return view('livewire.card-modal');
    }
}

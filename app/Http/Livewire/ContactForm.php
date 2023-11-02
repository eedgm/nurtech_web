<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ContactForm extends Component
{
    use AuthorizesRequests;

    public $showingModal = false;
    public $modalTitle = 'Contacto';
    public $showingModalThanks = false;
    public $modalTitleThanks = 'Gracias por contactarnos';

    public ?Contact $contact;

    protected $rules = [
        'contact.name' => ['required', 'max:255', 'string'],
        'contact.from' => ['required', 'max:255', 'string'],
        'contact.subject' => ['required', 'max:255', 'string'],
        'contact.phone' => ['nullable', 'max:255', 'string'],
        'contact.body' => ['required', 'string'],
    ];

    public function mount()
    {
        $this->showingModal = false;
        $this->showingModalThanks = false;
        $this->contact = new Contact();
    }

    public function send()
    {
        $this->validate();
        $this->contact->to = 'edilberto@gmail.com';

        $this->contact->save();

        $this->showingModal = false;
        $this->showingModalThanks = true;
    }

    public function show()
    {
        $this->showingModal = true;
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}

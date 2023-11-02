<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;
use App\Mail\contactClient;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
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
        $this->contact->subject = 'Más información...';
    }

    public function send()
    {
        $this->validate();
        $this->contact->to = 'edilberto.degr@gmail.com';

        DB::transaction(function () {
            $this->contact->save();

            $details = [
                'name' => $this->contact->name,
                'from' => $this->contact->from,
                'subject' => $this->contact->subject,
                'body' => $this->contact->body,
                'phone' => $this->contact->phone
            ];

            Mail::to('edilberto.degr@gmail.com')->send(new contactClient($details));
        });

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

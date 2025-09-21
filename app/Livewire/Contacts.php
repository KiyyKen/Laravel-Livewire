<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use App\Livewire\Forms\ContactForm;

#[Title('Contact Page')]
class Contacts extends Component
{
    public ContactForm $form;

    public function createNewMessage()
    {
        $this->form->store();

        session()->flash('success', 'Message sent successfully!');
    }

    public function render()
    {
        return view('livewire.contacts');
    }
}

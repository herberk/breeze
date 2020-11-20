<?php

namespace App\Http\Livewire\varios;

use Livewire\Component;

class Notificaciones extends Component
{

    public $listeners = [
        "flash_message" => "flashMessage"
    ];

    public function flashMessage($type, $msg){
        session()->flash($type, $msg);
    }


    public function render()
    {
        return view('livewire.varios.notificaciones');
    }
}

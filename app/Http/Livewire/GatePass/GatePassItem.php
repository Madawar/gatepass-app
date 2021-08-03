<?php

namespace App\Http\Livewire\GatePass;

use Livewire\Component;

class GatePassItem extends Component
{
    public $item;
    protected $listeners = ['validate-all' => 'validateItems'];
    public function mount($item)
    {
        $this->item = $item;
    }
    protected $rules = [
        'item.qty' => 'numeric|required',
        'item.item_description' => 'required|min:7',
        'item.serial' => 'required|min:10',
    ];

    public function updatedItem($field)
    {
        $this->emit('itemsUpdated');
    }
    public function validateItems()
    {
        $this->validate();
    }
    public function render()
    {
        $pass = null;
        return view('livewire.gate-pass.gate-pass-item')->with(compact('pass'));
    }
}

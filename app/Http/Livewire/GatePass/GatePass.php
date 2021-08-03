<?php

namespace App\Http\Livewire\GatePass;

use App\Models\GatePass as Pass;
use App\Models\GatePassItem;
use Carbon\Carbon;
use Livewire\Component;
use PDF;

class GatePass extends Component
{
    public $name_of_requester;
    public $vehicle_registration;
    public $purpose_of_pass;
    public $items = [];
    public $authorizations = [
        array('level' => 'Prepared By', 'name' => ''),
        array('level' => 'Checked By', 'name' => ''),
        array('level' => 'Authorized By', 'name' => ''),
        array('level' => 'Counter Signed By', 'name' => ''),
        array('level' => 'Checked By', 'name' => ''),
    ];
    protected $listeners = ['add_item' => 'addItem', 'remove_item' => 'removeItem', 'rerender' => 'reloadFlight', 'itemsUpdated' => 'itemValue'];

    protected $rules = [
        'authorizations.*.name' => 'required',
        'authorizations.*.level' => 'required',
        'name_of_requester' => 'required',
        'vehicle_registration' => 'required',
        'purpose_of_pass' => '',
    ];

    public function render()
    {
        $pass = null;
        return view('livewire.gate-pass.gate-pass')->with(compact('pass'));
    }

    public function addItem()
    {
        $this->emit('validate-all');
        $this->items[] = array(
            'qty' => 1,
            'item_description' => '',
            'serial' => ''
        );
    }

    public function itemValue($item)
    {
        dd($item);
    }

    public function savePass()
    {
        /*
        dd($this->items);
        //dd($this->name_of_requester);
        $this->validate();
        $pass =  Pass::create(array(
            'gate_pass_date' => Carbon::today(),
            'name_of_requester' => $this->name_of_requester,
            'serial' => Carbon::today(),
            'vehicle_registration' => $this->vehicle_registration,
            'purpose_of_pass' => $this->purpose_of_pass,
        ));
        $gatePassItems = [];
        foreach ($this->items as $item) {
            $gatePassItems[] = new GatePassItem($item);
        }
        dd($gatePassItems);
        $pass->items()->saveMany($gatePassItems);

*/

        $pdf = PDF::loadView('gatepass', []);
        return $pdf->save('test.pdf');
    }
}

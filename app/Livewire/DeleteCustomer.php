<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;

class DeleteCustomer extends Component
{
    public $customers;
    public $idSelected = false;


    public function mount(){

        $this->customers = Customer::all();
    }

    public function render()
    {
        return view('livewire.delete-customer', [
            'customers' => Customer::all(),
        ]);
    }

    public function idChange($value){

        if(!$value == ""){
            $this->idSelected = true;
        }
        else{
            $this->idSelected = false;
        }
    }
}

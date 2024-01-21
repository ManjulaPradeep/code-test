<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;

class UpdateCustomer extends Component
{
    public $customers;
    public $idSelected = false;
    public $selectedCustomer;


    public function mount(){
        $this->customers = Customer::all();
    }

    public function render()
    {
        return view('livewire.update-customer', [
            'customers' => Customer::all(),
        ]);
    }

    public function idChange($value){

        if ($value != "") {
            $customer = Customer::find($value);
    
            if ($customer) {
                $this->selectedCustomer = $customer;
                $this->idSelected = true;
                // dd($this->selectedCustomer);

            } else {
                $this->idSelected = false;
            }
        } else {
            $this->idSelected = false;
        }
    }
}

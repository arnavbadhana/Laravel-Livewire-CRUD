<?php

namespace App\Livewire;

use App\Models\Car;
use Livewire\Component;

class CarList extends Component
{
    public $cars;
    public function mount()
    {
        $this->cars = Car::all();
    }

    public function render()
    {
        // $cars = $this->cars;
        return view('livewire.car-list', ['cars' => $this->cars]);
    }

    public function delete($id){
        $car = Car::find($id);
        $car->delete();

        return $this->redirect(route('CarsList'), navigate:true);
    }
}

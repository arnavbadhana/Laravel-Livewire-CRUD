<?php

namespace App\Livewire;

use App\Models\Car;
use Livewire\Component;

class AddCar extends Component
{
    public $car_name, $brand, $engine_capacity, $fuel_type;

    public function render()
    {
        return view('livewire.add-car');
    }

    public function save(){
        $validated = $this->validate([
            'car_name' => 'required',
            'brand' => 'required',
            'engine_capacity' => 'required',
            'fuel_type' => 'required'
        ]);

            $result = Car::create($validated);
            if($result){
                $this->dispatch('carAdded');
            }
            return $this->redirect(route('CarsList'), navigate:true);

    }
}

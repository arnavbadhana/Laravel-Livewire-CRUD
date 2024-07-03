<?php

namespace App\Livewire;

use App\Models\Car;
use Livewire\Component;

class EditCar extends Component
{
    public $car_name, $brand, $engine_capacity, $fuel_type;
    public $car_id, $car_data;
   

    public function mount($id){
        $this->car_data = Car::find($id);
        $this->car_id = $id;
        $this->car_name = $this->car_data->car_name;
        $this->brand = $this->car_data->brand;
        $this->engine_capacity = $this->car_data->engine_capacity;
        $this->fuel_type = $this->car_data->fuel_type;
    }
    public function render()
    {
        return view('livewire.edit-car');
    }

    public function update(){
        $validated = $this->validate([
            'car_name' => 'required',
            'brand' => 'required',
            'engine_capacity' => 'required',
            'fuel_type' => 'required'
        ]);

        try {
            $result = Car::where('id', $this->car_id)->update($validated);
            return $this->redirect(route('CarsList'), navigate:true);
        } catch (\Exception $e) {
            dd($e);
        }
        
    }
}

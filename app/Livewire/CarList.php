<?php

namespace App\Livewire;

use App\Models\Car;
use Livewire\Component;
use Livewire\WithPagination;

class CarList extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['carAdded' => 'refreshCar'];

    public function refreshCar(){
        $cars = Car::paginate(5);
    }

    public function render()
    {
        $cars = Car::paginate(5);
        return view('livewire.car-list', ['cars' => $cars]);
    }

    public function delete($id){
        $car = Car::find($id);
        $car->delete();

        return $this->redirect(route('CarsList'), navigate:true);
    }
}

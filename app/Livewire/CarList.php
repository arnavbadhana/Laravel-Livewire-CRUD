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
    public $search;

    public function refreshCar(){
        $cars = Car::where('car_name', 'like', '%' . $this->search . '%')
                ->orderBy('created_at', 'DESC')
                ->paginate(5);
    }

    public function updatedSearch(){
        $this->resetPage();
    }

    public function render()
    {
        $cars = Car::where('car_name', 'like', '%' . $this->search . '%')
                ->orderBy('created_at', 'DESC')
                ->paginate(5);
        return view('livewire.car-list', ['cars' => $cars]);
    }

    public function delete($id){
        $car = Car::find($id);
        $car->delete();

        return $this->redirect(route('CarsList'), navigate:true);
    }
}


<div class="card mt-3 shadow rounded">
    <div class="card-header">
        <div class="row">
            <div class="col">All Cars</div>
            <div class="col">
                <a href="{{ route('AddCar') }}" wire:navigate.hover class="btn btn-primary btn-sm float-end">Add New</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Car Name</th>
                <th scope="col">Brand</th>
                <th scope="col">Engine Capacity</th>
                <th scope="col">Fuel Type</th>
                <th scope="col" colspan="2" class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($cars as $car)
              <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $car->car_name }}</td>
                <td>{{ $car->brand }}</td>
                <td>{{ $car->engine_capacity }}</td>
                <td>{{ $car->fuel_type }}</td>
                <td><a href="{{ route('EditCar', $car->id) }}" wire:navigate.hover class="btn btn-warning btn-sm">Edit</a></td>
                <td><button wire:click = "delete({{ $car->id }})" wire:confirm = "Are you Sure you wants to Delete this entry??" class="btn btn-danger btn-sm">Delete</button></td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</div>

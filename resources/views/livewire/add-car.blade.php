
<div class="card mt-3 shadow rounded">
    <div class="card-header">
        <div class="row">
            <div class="col">Add New Car</div>
            <div class="col">
                <a href="{{ route('CarsList') }}" wire:navigate.hover class="btn btn-primary btn-sm float-end">Cars List</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form wire:submit = "save">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Car Name</label>
              <input wire:model = "car_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('car_name') }}">
              <span class="text-danger small">
                @error('car_name')
                    {{ $message }}
                @enderror
              </span>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Brand</label>
              <input wire:model = "brand" type="text" class="form-control" id="exampleInputPassword1" value="{{ old('brand') }}">
              <span class="text-danger small">
                @error('brand')
                    {{ $message }}
                @enderror
              </span>
            </div>
            <div class="mb-3">
              <label class="form-label" for="exampleCheck1">Engine Capacity</label>
              <input wire:model = "engine_capacity" type="text" class="form-control" id="exampleCheck1" value="{{ old('engine_capacity') }}">
              <span class="text-danger small">
                @error('engine_capacity')
                    {{ $message }}
                @enderror
              </span>
            </div>
            <div class="mb-3">
                <label for="fuel_type" class="form-label">Fuel Type</label>
                <select wire:model = "fuel_type" id="fuel_type" class="form-control" value="{{ old('fuel_type') }}">
                    <option value="">Select Fuel Type</option>
                    <option value="Petrol">Petrol</option>
                    <option value="Diesel">Diesel</option>
                    <option value="CNG">CNG</option>
                    <option value="Electric">Electric</option>
                </select>
                <span class="text-danger small">
                    @error('fuel_type')
                        {{ $message }}
                    @enderror
                  </span>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
    </div>
</div>


<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}

    <div class="row d-flex justify-content-center mt-5">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('customer.update')}}" method="put" class="form p-2">
                        @csrf
    
                        <div class="form-group mt-3">
                            <label for="" class="form-label">Customer ID</label>
                            <select name="customerId" id="" 
                            wire:change="idChange($event.target.value)"
                            required>
                                <option value="">Select Customer ID</option>
                                @foreach($customers as $customer)
                                <option value="{{ $customer->id }}">{{ $customer->id }} - {{ $customer->name }}</option>
                            @endforeach
                            </select>
                        </div>
    
                        <div class="form-group mt-3">
                            <label for="" class="form-label">Name</label>
                            <input type="text" class="form-control border" name="name" max="150"
                            {{ $idSelected == false ? 'readonly' : '' }}
                            @isset($selectedCustomer)
                                value="{{$selectedCustomer->name}}"
                            @endisset
                             required>
                        </div>
    
                        <div class="form-group mt-3">
                            <label for="" class="form-label">NIC</label>
                            <input type="text" class="form-control border" name="nic" max="14"
                            {{ $idSelected == false ? 'readonly' : '' }}
                            @isset($selectedCustomer)
                            value="{{$selectedCustomer->nic}}"
                        @endisset
                             required>
                        </div>
    
                        <div class="form-group mt-3">
                            <label for="" class="form-label">Mobile</label>
                            <input type="number" class="form-control border" name="mobile" maxlength="12"
                            {{ $idSelected == false ? 'readonly' : '' }}
                            @isset($selectedCustomer)
                            value="{{$selectedCustomer->mobile}}"
                            @endisset
                            required>
                        </div>
    
                        <div class="form-group mt-3">
                            <label for="" class="form-label">Gender</label>
                            <select name="gender" id="" {{ $idSelected == false ? 'disabled = disbled' : '' }}
                                required>
                                <option value="">Select the Gender</option>
                                <option value="1"
                                @isset($selectedCustomer)
                                @if ($selectedCustomer->gender == 1)
                                @selected($selectedCustomer->gender)
                                @endif
                                @endisset
                                >Male</option>

                                <option value="0"
                                @isset($selectedCustomer)
                                @if ($selectedCustomer->gender == 0)
                                @selected($selectedCustomer->gender)
                                @endif
                                @endisset
                                >Female</option>
                            </select>
                        </div>
    
                        <label for="" class="form-lable me-4">Like</label>
    
                        <div class="form-check form-check-inline mt-3">
                            <input class="form-check-input" type="radio" name="like" id="like1"
                            {{ $idSelected == false ? 'disabled = disbled' : '' }} 
                                value="true" 
                                @isset($selectedCustomer)
                                @if ($selectedCustomer->like == 1)
                                @checked(true)
                                @endif
                                @endisset required>
                            <label class="form-check-label" for="like1">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="like" id="like2"
                            {{ $idSelected == false ? 'disabled = disbled' : '' }}
                                value="false"
                                @isset($selectedCustomer)
                                @if ($selectedCustomer->like == 0)
                                @checked(true)
                                @endif
                                @endisset
                                 required>
                            <label class="form-check-label" for="like2">No</label>
                        </div>

                        
                </div>
    
                <div class="form-group text-center mt-3 mb-3">
                    <input type="submit" class="btn btn-primary" value="Update"
                    {{ $idSelected == false ? 'disabled = disbled' : '' }}
                    >
                </div>
    
                </form>
            </div>
        </div>
    </div>
    </div>
</div>

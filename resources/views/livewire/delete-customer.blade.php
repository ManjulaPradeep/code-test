<div>
    {{-- The whole world belongs to you. --}}

    <div class="row d-flex justify-content-center mt-5">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('customer.destroy') }}" method="delete" class="form p-2">
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
                </div>

                <div class="form-group text-center mt-3 mb-3">
                    <input type="submit" class="btn btn-danger" value="Delete"
                    {{ $idSelected == false ? 'disabled = disbled' : '' }}>
                </div>

                </form>
            </div>
        </div>
    </div>



</div>

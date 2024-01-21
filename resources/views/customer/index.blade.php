@extends('master')

@section('title')
    Add New Customer
@endsection

@section('content')

@section('heading')
     Add New Customer
@endsection

<div class="row d-flex justify-content-center mt-5">
    <div class="col-6">
        <div class="card">
            <div class="card-body">
                <form action="{{route('customer.store')}}" method="post" class="form p-2">
                    @csrf

                    <div class="form-group mt-3">
                        <label for="" class="form-label">Name</label>
                        <input type="text" class="form-control border" name="name" max="150" required>
                    </div>

                    <div class="form-group mt-3">
                        <label for="" class="form-label">NIC</label>
                        <input type="text" class="form-control border" name="nic" max="14" required>
                    </div>

                    <div class="form-group mt-3">
                        <label for="" class="form-label">Mobile</label>
                        <input type="number" class="form-control border" name="mobile" maxlength="12" required>
                    </div>

                    <div class="form-group mt-3">
                        <label for="" class="form-label">Gender</label>
                        <select name="gender" id="" required>
                            <option value="1">Select the Gender</option>
                            <option value="1">Male</option>
                            <option value="0">Female</option>
                        </select>
                    </div>

                    <label for="" class="form-lable me-4">Like</label>

                    <div class="form-check form-check-inline mt-3">
                        <input class="form-check-input" type="radio" name="like" id="like1"
                            value="true" required>
                        <label class="form-check-label" for="like1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="like" id="like2"
                            value="false" required>
                        <label class="form-check-label" for="like2">No</label>
                    </div>
            </div>

            <div class="form-group text-center mt-3 mb-3">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>

            </form>
        </div>
    </div>
</div>
</div>

@endsection

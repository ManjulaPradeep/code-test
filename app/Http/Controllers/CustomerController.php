<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Models\Customer;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use Illuminate\Support\Facades\Redirect;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('customer.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCustomerRequest $request)
    {
        $gender = null;
        $like =  null;

        try {

            if($request->input('gender') == "1"){
                $gender = 1;
            }else{
                $gender = 0;
            }

            if($request->input('like') == "true"){
                $like = true;
            }else{
                $like = false;
            }

            $customer = Customer::create([
                'name' => $request->input('name'),
                'nic' => $request->input('nic'),
                'mobile' => $request->input('mobile'),
                // 'gender' => $request->input('gender'),
                // 'like' => $request->input('like'),
                'gender' => $gender,
                'like' => $like,
            ]);

            return back()->with('success', 'Student Created Successfully');

        } catch (\Throwable $th) {
            $error = $th->getMessage();
            return Redirect::back()->withErrors('error',$error);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        $customers = Customer::all();
        return view('customer.update',compact('customers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        $customerID = $request->input('id');
        $customer = Customer::where('student_id', $customerID)->first();

        if ($customer) {
            try {
                $customer->update($request->validated());

                return back()->with('success', 'Customer Created Successfully');
            } catch (\Throwable $th) {
                $error = $th->getMessage();
                return Redirect::back()->withErrors('error',$error);            }
        } else {
            return response()->json(['message' => 'Customer not found'], 404);
        }
    }

    public function delete(Customer $customer)
    {
        $customers = Customer::all();
        return view('customer.delete',compact('customers'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CustomerRequest $request)
    {
        $customerID = $request->input('id');
        $customer = Customer::where('student_id', $customerID)->first();

        if (!$customer) {
            return response()->json(['message' => 'Customer not found'], 404);
        }
        
        $customer->delete();
        return response()->json(['message' => 'Customer deleted'],204);
    }
}

<?php

namespace App\Http\Controllers;

use App\Customer;
use App\City;
use App\Zipcode;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return 'Hola estoy en Index';
        
        //$customers=\DB::table('customers')->select('name','company_name','phone','email')->get();
        
        //return $customers;
        
        //$customers = Customer::select('name','company_name','phone','email','city_id')->get();
        //return $customers[0]->city()->get();

        //$customers = Customer::with(['city','zipcode'])->select('id','name','phone','email','city_id','zipcode_id')->get();
        //return $customers;

        $customers = Customer::select('id','name','phone','email')->get();
        return $customers;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::select('id', 'description')->get();
        $zipcodes = Zipcode::select('id','description')->get();
        return view('customers.create', compact('cities','zipcodes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request->request);
        // Customer::create([
        //     'name'=>$request->name;
        //     'company_name'=>$request->company_name;
        //     'phone'=>$request->phone;
        //     'email'=>$request->email;
        //     'address-1'=>$request->address_1;
        //]);
        Customer::create($request->except('_token'));

        return redirect()->route('customers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        return $customer->load(['city','zipcode']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        // 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //DB::table("customers")->delete($id);
        //return response()->json(['success'=>"Product Deleted successfully.", 'tr'=>'tr_'.$id]);
    }
}

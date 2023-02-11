<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddressRequest;
use App\Managers\AddressManager;
use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function __construct(protected AddressManager $manager)
    {
    }


    public function index()
    {
        $addresses = Address::query()->with(['user'])->get();
        return view('addresses.index',['addresses'=>Address::orderBy("id")->paginate(6)]);
    }
    public function create()
    {
        return view('addresses.create');
    }
    public function store(AddressRequest $request)
    {

        $address = Address::create($request->all());
        return redirect()->route('addresses.show', $address);
    }
    public function show(Address $address)
    {
        return view('addresses.show', ['address' => $address]);
    }
    public function edit(Address $address)
    {
        return view('addresses.edit',compact('address'));
    }
    public function update(Request $request, Address $address)
    {
        $address->update($request->all());
        return redirect()->route('addresses.show',$address);
    }
    public function destroy(Address $address)
    {
        $address->delete();
        return redirect()->route('addresses.index');
    }
}

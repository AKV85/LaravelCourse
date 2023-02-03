<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller

{

    public function index()
    {
        return Person::query()->with(['user','address'])->get();
    }
    public function create()
    {
        return view('people.create');
    }
    public function store(Request $request)
    {
        $person = Person::create($request->all());
        return redirect()->route('people.show',$person);
    }
    public function show(Person $person)
    {
        return $person;
    }
    public function edit(Person $person)
    {
        return view('people.edit',compact('person'));
    }
    public function update(Request $request, Person $person)
    {
        $person->update($request->all());
        return redirect()->route('people.show',$person);
    }
    public function destroy(Person $person)
    {
        $person->delete();
        return redirect()->route('people.index');
    }
}


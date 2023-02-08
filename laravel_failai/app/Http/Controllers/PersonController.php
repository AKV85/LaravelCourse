<?php

namespace App\Http\Controllers;

use App\Managers\PersonManager;
use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function __construct(protected PersonManager $manager)
    {
    }

    public function index()
    {
        $persons = Person::query()->with(['user', 'address'])->get();

        return view('persons.index',
            compact('persons'));
    }
    public function create()
    {
        return view('persons.create');
    }

    public function store(Request $request)
    {
        $person = $this->manager->createPerson($request);
        return redirect()->route('persons.show', $person);
    }

    public function show(Person $person)
    {
        return view('persons.show', ['person' => $person]);
    }

    public function edit(Person $person)
    {
        return view('persons.edit', compact('person'));
    }

    public function update(Request $request, Person $person)
    {
        $person->update($request->all());
        return redirect()->route('persons.show', $person);
    }

    public function destroy(Person $person)
    {
        $person->delete();
        return redirect()->route('persons.index');
    }
}

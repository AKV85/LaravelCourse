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
        $request->validate([
            'name' => ['required', 'string', 'min:3', 'max:255'],
            'surname' => ['required', 'string', 'min:3', 'max:255'],
            'personal_code' => ['nullable', 'string', 'min:3', 'max:255'],
            'email' => ['required', 'email'],
            'phone' => ['nullable', 'string', 'min:4', 'max:255'],
        ]);

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
        $request->validate([
            'name' => ['required', 'string', 'min:3', 'max:255'],
            'surname' => ['required', 'string', 'min:3', 'max:255'],
            'personal_code' => ['nullable', 'string', 'min:3', 'max:255'],
            'email' => ['required', 'email'],
            'phone' => ['nullable', 'string', 'min:4', 'max:255'],
            'user_id' => ['required', 'integer', 'exists:users,id'],
        ]);
        $person->update($request->all());
        return redirect()->route('persons.show', $person);
    }

    public function destroy(Person $person)
    {
        $person->delete();
        return redirect()->route('persons.index');
    }
}

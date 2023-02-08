<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index()
    {
        return view('statuses.index');
    }

    public function create()
    {
        return view('statuses.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'min:3', 'max:255'],
            'type' => ['required', 'string', 'in_array:order,payment,category,user,product,order_details'],
        ]);

        $status = Status::create($request->all());
        return redirect()->route('statuses.show', $status);
    }

    public function show(Status $status)
    {
        return $status;
    }

    public function edit(Status $status)
    {
        return view('statuses.edit', compact('status'));
    }

    public function update(Request $request, Status $status)
    {
        $status->update($request->all());
        return redirect()->route('statuses.show', $status);
    }

    public function destroy(Status $status)
    {
        $status->delete();
        return redirect()->route('statuses.index');
    }
}

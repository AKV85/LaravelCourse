<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Managers\StatusManager;
use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function __construct(protected StatusManager $manager)
    {
    }
    public function index()
    {
        $statuses = Status::query()->get();

        return view('statuses.index', ['statuses' => Status::orderBy("id")->paginate(5)]);
    }

    public function create()
    {
        return view('statuses.create');
    }

    public function store(Request $request)
    {

        $status = Status::create($request->all());
        return redirect()->route('statuses.show', $status);
    }

    public function show(Status $status)
    {
        return view('statuses.show', ['status' => $status]);
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

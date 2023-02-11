<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Managers\UserManager;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * @param UserManager $manager
     */
    public function __construct(protected UserManager $manager)
    {
    }
    public function index()
    {
        $users = User::query()->get();

        return view('users.index', ['users' => User::orderBy("id")->paginate(5)]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(UserRequest $request)
    {
        $user = User::create($request->all());
        return redirect()->route('users.show', $user);
    }

    public function show(User $user)
    {
        return view('users.show', ['user' => $user]);
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(UserRequest $request, User $user)
    {
        $user->update($request->all());
        return redirect()->route('users.show', $user);
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }
}


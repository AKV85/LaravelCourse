<?php

namespace App\Managers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CategoryManager
{
//    public function createPerson(Request $request): Product
//    {
//        DB::beginTransaction();
//
//        $user = User::create([
//            'name' => $request->get('name'),
//            'email' => $request->get('email'),
//            'password' => Hash::make(Str::random(8)),   // random password
//        ]);
//
//        $personArray = $request->all() + ['user_id' => $user->id];
//
//        $person = Product::create($personArray);
//
//        DB::commit();
//
//        return $person;
//    }
}

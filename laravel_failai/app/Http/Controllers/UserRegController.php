<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserRegController extends Controller
{
    //show register/create form
    public function create(){
        return view('users.register');
    }
//create new user
    public function store(Request $request){
        $formFields= $request->validate([
            'name'=>['required','min:3'],
            'email'=>['required','email',Rule::unique('users','email')],
            'password'=>['required','confirmed','min:8'],
        ]);

        //Hash Password
//        kodas šifruoja slaptažodį, kad jis būtų saugiau saugomas duomenų bazėje,
// ir kuria naują naudotojo įrašą naudodamas "User" modelį ir "create" funkciją.
        $formFields['password']= bcrypt($formFields['password']);

        $user = User::create($formFields);
//kodas automatiškai prisijungia sukurtą naudotoją ir nukreipia vartotoją į
// pagrindinį puslapį su pranešimu apie sėkmingą registraciją ir prisijungimą.
        auth()->login($user);

        return redirect('/')->with('message', 'Naudotojas sukurtas ir prisijungiate sekmingai');
    }

    //logout User
    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('users.index')->with('message','Tu sekmingai atsijungei');
    }

    //show login form
    public function login()
    {
        return view('users.login');
    }

    //authenticate user
    public function authenticate(Request $request){
        $formFields= $request->validate([
            'email'=>['required','email'],
            'password'=>['required']
        ]);

        if(auth()->attempt($formFields)){
            $request->session()->regenerate();

            return redirect('/')->with('message' ,
                'Tu sekmingai prisijungei');
        }

        return back()->withErrors(['email'=>'Neteisingi prisijungimo duomenis'])->
        onlyInput('email');
    }

}

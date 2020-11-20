<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \App\Http\Requests\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);

        Auth::login($user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]));

        event(new Registered($user));

        return redirect(RouteServiceProvider::HOME);
    }

    public function show(Request $request)
    {
       return view('profile.show', [
        'request' => $request,
        'user' => $request->user(),
    ]);
    }
    public function update(Request $request, $id){
        $this->validate($request, [
            'nickname' => [ 'string', 'max:10'],
            'name' => 'required|string|max:255',
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($id)],
        ]);
        $users = user::find($id);
        $users->nickname= request('nickname');
        $users->name= request('name');
        $users->email= request('email');
        $users->save();

      return back()->with('message', 'Las modificaciones '.$request->name.' fueron registrados en la BBDD  ');
//        return redirect()->route('users')->with('success', 'La categoria  fue modificada');   success
//        session()->flash('message', 'Las modificaciones '.$request->name.' fueron registrados en la BBDD  ');


}
}

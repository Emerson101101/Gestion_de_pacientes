<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
  

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

     public function index()
     {
         $users = User::All();
         
         return view('/auth/show')->with(['user'=>$users]);
 }
 
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
    public function creates()
    {
        return view('/auth/register'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function store(Request $request)
     {
         $data = request()->validate([ 
             'name'=> 'required',
             'email'=> 'required',
             'password'=> 'required',
 
             ]); 
             // Enviar insert 
             user::create($data); 
             // Redireccionar 
             return redirect('/auth/show'); 
     }
 
     /**
      * Display the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function show($id)
     {
         //
     }
 
     /**
      * Show the form for editing the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
      public function edits($id)
{
    $user = User::find($id);
    return view('users.edit', compact('user'));
}

     public function edit(user $user)
     {
        
 
         return view('auth/update')->with(['user'=>$user]);
         
     }
 
     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function update(Request $request, user $user )
     {
         $data = request()->validate([ 
             'name' => 'required',
             'email'=> 'required'
             ]); 
 
             $user->name = $data['name']; 
             $user->email = $data['email']; 
             $user->updated_at = now();
             $user->save(); 
             // Redireccionar 
             return redirect('/auth/show'); 
      
     }
 
     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */

    public function destroy($id)
    {
        user::destroy($id);
        return response()->json(array('res'=>true)); 
    }
}



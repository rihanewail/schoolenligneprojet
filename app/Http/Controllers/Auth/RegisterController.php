<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\enseignant;
use App\Models\Etudiant;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
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
        $var="";
        if ($data['role'] == 'enseignant') {
            enseignant::create([
                'nom' => $data['name'],
                'prenom' =>  $data['email'],
                'tel' => $data['email'],
                'grade' =>  $data['grade'],
                'specialite' =>  $data['specialite'],

                    $var ='2',
            ]);
        } else {
            Etudiant::create([
                'nom' => $data['name'],
                'prenom' =>  $data['name'],
                'tel' => $data['name'],
                'specialite' =>  $data['specialite'],
                'dateDN' =>  $data['dateDN'],
                'niveaux' =>  $data['niveaux'],
                'sexe' =>  $data['sexe'],
                'universite' =>  $data['universite'],
                      $var ='0',

            ]);
        }



        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'usertype'=> $var,
            'specialite' => $data['specialite'],

            'password' => Hash::make($data['password']),
        ]);
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Candidate;
use Illuminate\Http\Request;
use Beautymail;
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
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'middlename' => 'required',
            'surname' => 'required',
            'email' => 'required|email',
            'dob' => 'required',
            'phone' => 'required',
            'location_id' => 'required'
        ]);
        //mt_rand(000000, 999999)
        $passwordcode = 'yellow';
        $username = $request->firstname . mt_rand(000,999);
//        dd($passwordcode);
        $user = New User();
        $user->username = $username;
        $user->email = $request->email;
        $user->password = bcrypt($passwordcode);
        $user->save();
        $candidate = New Candidate();
        $candidate->firstname = $request->firstname;
        $candidate->middlename = $request->middlename;
        $candidate->surname = $request->surname;
        $candidate->dob = $request->dob;
        $candidate->phone = $request->phone;
        $candidate->location_id = $request->location_id;
        $candidate->save();
        //send email to registered candidate
        $email = $request->email;
        if($email != ''){
            $send = app()->make(\Snowfire\Beautymail\Beautymail::class);
            $send->send('emails.welcome', compact('r_message', 'username', 'passwordcode'),
                function($r_message) use ($email, $username) {
                    $r_message
                        ->from('adun@demovalley.com')
                        ->to($email, $username)
                        ->subject('Welcome to Admiralty University!');
                });
        }
//        return $request->all();
        $user_id = $user->id;
        Session::put('userId', $user_id);
        $request->session()->flash('success', 'Registration Successful');
        return redirect('dashboard');
//        $candidate = Candidate::create([
//            'firstname' => $data['firstname'],
//            'middlename' => $data['middlename'],
//            'surname' => $data['surname'],
//            'dob' => $data['dob'],
//            'phone' => $data['phone'],
//        ]);
////        $email = $request->email;
////        if($email != ''){
////            $send = app()->make(\Snowfire\Beautymail\Beautymail::class);
////            $send->send('emails.welcome', compact('r_message', 'username', 'passwordcode'),
////                function($r_message) use ($email, $username) {
////                    $r_message
////                        ->from('adun@demovalley.com')
////                        ->to($email, $username)
////                        ->subject('Welcome to Admiralty University!');
////                });
////        }
//        $username = $data['firstname' . mt_rand(000,999)];
//        $passwordcode = mt_rand(000000, 999999);
//        return User::create([
//            'username' => $username,
//            'email' => $data['email'],
//            'password' => Hash::make($passwordcode),
//        ]);
    }
}

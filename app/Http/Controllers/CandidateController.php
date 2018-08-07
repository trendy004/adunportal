<?php

namespace App\Http\Controllers;

use App\Candidate;
use App\Course;
use App\CourseList;
use App\ExamDetail;
use App\Faculty;
use App\Grade;
use App\JambScore;
use App\Location;
use App\Olevels;
use App\Photo;
use App\ResultUpload;
use App\SecondExamDetail;
use App\SecondSitting;
use App\Subject;
use App\Teller;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\DB;
use Beautymail;
class CandidateController extends Controller
{
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
//    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function viewRegister()
    {
        $locations = Location::all();
        return view('auth/register', compact('locations'));
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    public function create(Request $request)
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
    }
    //login
    public function showLoginFOrm()
    {
        $locations = Location::all();
        $user = User::all();
        return view('auth/login', compact('locations', 'user'));
    }
    public function login(Request $request)
    {
//        return $request->all();
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
//        $login = User::pluck('email', 'password');
//        dd();
        if(\Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            //login user
            $userId = \Auth::user()->id;
            dd($userId);
            return ('dashboard');
        }else{
            //$request->session()->flash('warning', 'Invalid credential');
            return redirect()->back();
        }
    }
    public function logout()
    {
        return Auth::logout();
    }
    //view Dashboard
    public function dashboard()
    {
        $candidateDetails = User::where('id', '=', Session::get('userId'))->select('email','username')->first();
        dd($candidateDetails);
        return view('dashboard', compact('candidateDetails'));
    }
    /**
     *
     * view jamb page
     *
     */
    public function jamb(){
        $subjects = Subject::all();
        $results = JambScore::select('subjects.olevel', 'jamb_scores.score')->join('subjects', 'subjects.id',
            'subject_id')
            ->where('jamb_scores.candidate_id', '=', Session::get('userId'))->get();
        $total = JambScore::select('score')->where('candidate_id', '=', Session::get('userId'))->where('score', '>',
            0)->sum('score');
        $candidateDetails = User::where('id', '=', Session::get('userId'))->select('email','username')->first();
//        dd($total);
        return view('jamb', compact('subjects', 'results', 'total', 'candidateDetails'));
    }
    /**
     * Store Jamb result per subject
     *
     * Upload Jamb result
     */
    public function createJambScore(Request $request)
    {
        $request->validate([
            'subject_id' => 'required',
            'score' => 'required',
        ]);
        $checkForDuplicate = JambScore::where([
                'candidate_id' => Session::get('userId'),
                'subject_id' => $request->subject_id,
            ])->first();

        $subjectPerCandidate = JambScore::select('subject_id')->where('candidate_id', '=', Session::get('userId'))->get();
        $numberOFInput = COUNT($subjectPerCandidate);
        if(! $checkForDuplicate && $numberOFInput < 4){
                $jambScore = New JambScore();
                $jambScore->candidate_id = Session::get('userId');
                $jambScore->subject_id = $request->subject_id;
            if($jambScore->score = $request->score <= 100){
                $jambScore->score = $request->score;
            }else{
                $request->session()->flash('warning', 'Invalid Score');
                return redirect('jamb');
            }
                if($request->hasFile('jamb_result'))
                {
                    $image = $request->file('jamb_result');
                    $filename=time() . '.' . $image->getClientOriginalExtension();
                    $image->move('uploads', $filename);
        //            Image::make($image)->resize(890)->save($location);
                    $jambScore->jamb_result = $filename;
                }
                $jambScore->save();
            }else{
            $request->session()->flash('warning', 'JAMB Result already exist or completed');
        }
        return redirect('jamb');
    }
    public function uploadJambResult(Request $request)
    {
        $request->validate([
            'jamb_result' => 'required',
        ]);
        $jambScore = New ResultUpload();
        $jambScore->candidate_id = Session::get('userId');
            $image = $request->file('jamb_result');
            $filename=time() . '.' . $image->getClientOriginalExtension();
            $image->move('uploads', $filename);
//            Image::make($image)->resize(890)->save($location);
        $jambScore->jamb_result = $filename;
        $jambScore->save();
        $request->session()->flash('success', 'Jamb Result Successfully Uploaded');

        return redirect('jamb');
    }
    /**
     *
     * View O level first sitting page
     *
     */
    public function olevels()
    {
        $subjects = Subject::all();
        $grades = Grade::all();
        $results = Olevels::select('grades.grade', 'subjects.olevel', 'olevels.candidate_id')
            ->join('subjects', 'subjects.id', 'subject_id')
            ->join('grades', 'grades.id', 'grade_id')->where('olevels.candidate_id', '=', Session::get('userId'))
            ->get();
        $firstSitting = ExamDetail::select('exam_type', 'exam_year')->where('candidate_id', '=', Session::get('userId'))
            ->get()->last();
        $candidateDetails = User::where('id', '=', Session::get('userId'))->select('email','username')->first();
//        dd($results);
        return view('olevels', compact('subjects', 'grades', 'results', 'firstSitting', 'candidateDetails'));
    }
    /**
     *
     * store exam type
     *
     */
    public function storeExamType(Request $request)
    {
        $request->validate([
            'exam_type' => 'required',
            'exam_year' => 'required',
        ]);

            $olevels = New ExamDetail();
            $olevels->candidate_id = Session::get('userId');
            $olevels->exam_type = $request->exam_type;
            $olevels->exam_year = $request->exam_year;
            $olevels->save();
            $request->session()->flash('success', 'Exam Type Successfully Added');
        return redirect('olevels');
    }
    /**
     *
     *store O'level first result
     *
     */
    public function storeOLevelGrade(Request $request)
    {
        $request->validate([
            'subject_id' => 'required',
            'grade_id' => 'required',
        ]);
        $checkForDuplicate = Olevels::where([
            'candidate_id' => Session::get('userId'),
            'subject_id' => $request->subject_id,
        ])->first();
        $subjectPerCandidate = JambScore::select('subject_id')->where('candidate_id', '=', Session::get('userId'))->get();
        $numberOFInput = COUNT($subjectPerCandidate);
//        dd($checkForDuplicate);
        if(! $checkForDuplicate && $numberOFInput < 9) {
            $olevels = New Olevels();
            $olevels->candidate_id = Session::get('userId');
            $olevels->subject_id = $request->subject_id;
            $olevels->grade_id = $request->grade_id;
            $olevels->save();
            $request->session()->flash("success", "O'Level Result Successfully Added");
        }else{
            $request->session()->flash("warning", "O'Level Subject completed");
        }
        return redirect('olevels');
    }
    public function uploadFirstSitting(Request $request)
    {
        $resultupload = New ResultUpload();
        $resultupload->candidate_id = Session::get('userId');
        $image = $request->file('first_result');
        $filename=time() . '.' . $image->getClientOriginalExtension();
        $image->move('uploads', $filename);
//            Image::make($image)->resize(890)->save($location);
        $resultupload->first_result = $filename;
        $request->session()->flash("success", "O'level Result Successfully Uploaded");
        return redirect('olevels');
    }
    /**
     *
     *View O'level SECOND sitting page
     *
     */
    public function second_sitting()
    {
        $subjects = Subject::all();
        $grades = Grade::all();
        $results = SecondSitting::select('grades.grade', 'subjects.olevel', 'second_sittings.candidate_id')
            ->join('subjects', 'subjects.id', 'subject_id')
            ->join('grades', 'grades.id', 'grade_id')->where('second_sittings.candidate_id', '=', Session::get('userId'))
            ->get();
        $secondSitting = SecondExamDetail::select('exam_type', 'exam_year')->where('candidate_id', '=', Session::get('userId'))
            ->get()->last();
        $candidateDetails = User::where('id', '=', Session::get('userId'))->select('email','username')->first();
//        dd($secondSitting);
        return view('second_sitting', compact('subjects', 'grades', 'results', 'secondSitting', 'candidateDetails'));
    }
    /**
     *
     *Store O'level Second sitting Exam Type
     *
     */
    public function storeSecondExamType(Request $request)
    {
        $request->validate([
            'exam_type' => 'required',
            'exam_year' => 'required',
        ]);
        $olevels = New SecondExamDetail();
        $olevels->candidate_id = Session::get('userId');
        $olevels->exam_type = $request->exam_type;
        $olevels->exam_year = $request->exam_year;
        $olevels->save();
        $request->session()->flash('success', 'Exam Type Successfully Added');
        return redirect('second_sitting');
    }
    /**
     * Store O'level result per subject
     *
     * Upload Second sitting result
     */
    public function storesSecondSitting(Request $request)
    {
        $request->validate([
            'subject_id' => 'required',
            'grade_id' => 'required',
        ]);
        $checkForDuplicate = SecondExamDetail::where([
            'candidate_id' => Session::get('userId'),
            'subject_id' => $request->subject_id,
            'grade_id' => $request->grade_id,
        ])->first();
        $subjectPerCandidate = JambScore::select('subject_id')->where('candidate_id', '=', Session::get('userId'))->get();
        $numberOFInput = COUNT($subjectPerCandidate);
        if(! $checkForDuplicate && $numberOFInput < 9) {
            $olevels = New SecondSitting();
            $olevels->candidate_id = Session::get('userId');
            $olevels->subject_id = $request->subject_id;
            $olevels->grade_id = $request->grade_id;
            $olevels->save();
            $request->session()->flash('success', 'Jamb Result Successfully Added');
        }else{
            $request->session()->flash('warning', 'Result already exist');
        }
        return redirect('second_sitting');
    }
    public function uploadSecondSitting(Request $request){
        $resultupload = New ResultUpload();
        $resultupload->candidate_id = Session::get('userId');
        $image = $request->file('second_result');
        $filename=time() . '.' . $image->getClientOriginalExtension();
        $image->move('uploads', $filename);
//            Image::make($image)->resize(890)->save($location);
        $resultupload->second_sitting = $filename;
        $resultupload->save();
        $request->session()->flash('success', 'Jamb Result Successfully Uploaded');

        return redirect('second_sitting');
    }
    /**
     * View Passport Photograph
     *
     * Store Passport Photograph
     */
    public function photo(){
        $photo = Photo::where('candidate_id', '=', Session::get('userId'))->first();
        $candidateDetails = User::where('id', '=', Session::get('userId'))->select('email','username')->first();
        return view('photo', compact('photo', 'candidateDetails'));
    }
    public function uploadPhoto(Request $request){
        $request->validate([
            'photo' => 'required',
        ]);
        $photo = New Photo();
        $photo->candidate_id = Session::get('userId');
            $image = $request->file('photo');
            $filename=time() . '.' . $image->getClientOriginalExtension();
            $image->move('uploads', $filename);
//            Image::make($image)->resize(890)->save($location);
        $photo->photo = $filename;
        $photo->save();
        return redirect('payment');
    }
    /**
     *
     * View Course page
     *
     */
    public function course(){
        $courselists = CourseList::all();
        $faculties = Faculty::all();
        $courses = Course::select('courses.id', 'course_lists.course', 'faculties.faculty')
            ->join('faculties', 'courses.faculty_id', '=', 'faculties.id')
            ->join('course_lists', 'courses.course_id', '=', 'course_lists.id')
            ->where('courses.candidate_id', '=', Session::get('userId'))->get();
        $candidateDetails = User::where('id', '=', Session::get('userId'))->select('email','username')->first();
        return view('course', compact('courses', 'courselists', 'faculties', 'candidateDetails'));
    }
    public function select_course_ajax(Request $request)
    {
        //SELECT * FROM adun.courselists where courselists.faculty = 2;
        if($request->ajax()){
            $courses = DB::table('courselists')->where('faculty_id',$request->faculty_id)->pluck("id",
                "course")->all();
            $data = view('ajax-select-courses',compact('courses'))->render();
            return response()->json(['options'=>$data]);
        }
    }
    /**
     *
     * View Course page
     *
     */
    public function createCourse(Request $request){
        $request->validate([
            'faculty_id' => 'required',
            'course_id' => 'required',
        ]);
        $olevels = New Course();
        $olevels->candidate_id = Session::get('userId');
        $olevels->faculty_id = $request->faculty_id;
        $olevels->course_id = $request->course_id;
        $olevels->save();
        $request->session()->flash('success', 'Course of Study Successfully Added');
        return redirect('course');
    }
    /**
     *
     * View Payment page
     *
     */
    public function payment(){
        $candidateDetails = User::where('id', '=', Session::get('userId'))->select('email','username')->first();
        return view('payment', compact('candidateDetails'));
    }
    public function uploadTeller(Request $request){
        $request->validate([
            'payment_date' => 'required',
            'teller_no' => 'required',
            'teller' => 'required',
        ]);
//        return $request->all();
        $teller = New Teller();
        $teller->candidate_id = Session::get('userId');
        $teller->teller_no = $request->teller_no;
        $teller->payment_date = $request->payment_date;
        $teller->depositors_no = $request->depositors_no;
        $image = $request->file('teller');
        $filename=time() . '.' . $image->getClientOriginalExtension();
        $image->move('uploads', $filename);
//            Image::make($image)->resize(890)->save($location);
        $teller->teller = $filename;
        $teller->save();
        $request->session()->flash('success', 'Teller Successfully Added');
        return view('payment');
    }
}
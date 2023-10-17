<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
//        dd($request->all());
        $user = Auth::user();
        $validatedData = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'nickname' => 'required',
            'facebook' => 'required',
            'line' => 'required',
            'telephone' => 'required',
            'date' => 'required',
            'time' => 'required',
            'slip' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the validation rules as needed
        ]);
        if ($request->hasFile('slip')) {
            $image = $request->file('slip');
            $path = $image->store('public/images');
        }

        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->nickname = $request->nickname;
        $user->facebook = $request->facebook;
        $user->line = $request->line;
        $user->telephone = $request->telephone;
        $user->date = $request->date;
        $user->time = $request->time;
        $user->register = 1;
        $user->slip = $path;
        $user->save();
        return redirect('/dashboard')->withErrors(['error' => 'Failed to save data.']);
        // Redirect or return a response as desired
    }
    public function retrieve(){
        $query = User::query();
        $query->where('register', 1)->orderBy('id', 'desc'); // Add filter for the 'register' column
        $users = $query->paginate(10);
        return view('staff/registration-check', compact('users'));
    }
    public function detail(Request $request)
    {
        $id = $request->input('id');
        $user = User::find($id);

        if (!$user) {
            abort(404); // Display a 404 error page or perform a different action
        }

        // If the 'slip' attribute is the filename and not the full path,
        // construct the path accordingly (assuming it's in the 'images' folder).
        $path =$user->slip;
        //dd($path,Storage::exists($path));
        return view('staff/registration-detail', compact('user', 'path'));
    }
    public function approve(Request $request){
        $approver = Auth::user();
        $id = $request->input('id');
        $user = User::find($id);
        $user->approve = $approver->id;
        $user->save();
        return redirect('/check');
    }
    public function store1(Request $request){
        if ($request->date == 1 &&  User::where('day1', 1)->count() == 50)
            return redirect('/1/detail')->with('caution', 'the date that you select is already full');
        if ($request->date == 2 &&  User::where('day1', 2)->count() == 50)
            return redirect('/1/detail')->with('caution', 'the date that you select is already full');
        if ($request->date == 3 &&  User::where('day1', 3)->count() == 50)
            return redirect('/1/detail')->with('caution', 'the date that you select is already full');
        if ($request->date == 4 &&  User::where('day1', 4)->count() == 50)
            return redirect('/1/detail')->with('caution', 'the date that you select is already full');
        if ($request->date == 5 &&  User::where('day1', 5)->count() == 50)
            return redirect('/1/detail')->with('caution', 'the date that you select is already full');
        $user = Auth::user();
        $user->day1 = $request->date;
        $user->song1 = $request->song;
        $user->artist1 = $request->artist;
        $user->link1 = $request->link;
        $user->save();
        return redirect('/1/detail')->with('success', 'saved');
    }

    public function checkinconfirm(Request $request){
        $user = User::where('email', 'like', $request->id . '@student.chula.ac.th')->first();
        if ($user->day1 == $request->date){
            $user->checkin1 = now();
            $user->save();
            return redirect('/checkin')->with('success', $user->email);
        }
        else {
            return redirect('/checkin')->with('caution', 'this user do not chose this day');
        }
    }
    public function userorderbyque(Request $request)
    {
        // Use the User model to query the database
        $users = User::where('day1', $request->date)
            ->where('sing1', 'N')
            ->orderBy('checkin1')
            ->get();

        // $users will now contain the results sorted by checkin1 column

        // Your other controller logic here

        return view('your_view', ['users' => $users]);
    }
}

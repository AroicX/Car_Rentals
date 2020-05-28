<?php

namespace App\Http\Controllers;


use Auth;
use App\User;
use App\Car;
use Illuminate\Http\Request;
use Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function getProfile(){

        $check = User::where('id',Auth::id())->where('status',0)->first();


        if($check){

            $user = User::where('id',Auth::id())->first();

            return view('profile',compact('user'));
        }else{
            Auth::logout();

            return redirect('home');
        }

    }

    public function UpdateProfile(Request $request)
    {

        // return $request->action;

        switch ($request->action) {
            case 'information':
               $data = [
                   'name' => $request->name,
                //    'email' => $request->email,
                   'phone' => $request->phone,
                   'location' => $request->location,
                   'gender' => $request->gender,
                  
               ];


               User::where('id',Auth::id())->update($data);


                $notify = array( 'type' => 'success',  'msg' => 'User information Updated Succesfully');
                return redirect()->back()->with($notify);



                break;
            
            case 'password':
                if (User::where('id', Auth::id())){
                    if (Hash::check($request->old, Auth::user()->password, [])) {
                        
                        if($request->new == $request->con){
                            $data = array(
                                'password' => bcrypt($request->input('new')),
                            );
     
                            User::where('id', Auth::id())->update($data);
     
                            $notify = array(
     
                                'msg' => 'Successful... You Have Channged your Password !',
                                'type' => 'success' 
                            );
                            return redirect()->back()->with($notify);
                        }else{
     
                            $notify = array(
     
                                'msg' => 'New Password & Confirm Password No Match ',
                                'type' => 'info' 
                            );
                            return redirect()->back()->with($notify);
                        }
                    }else{
     
                        $notify = array(
     
                            'msg' => 'Old Password is invaild ',
                            'type' => 'error' 
                        );
                        return redirect()->back()->with($notify);
                    }
                }



                break;
            
            default:
                # code...
                break;
        }
    }


    public function findCarById( $id = null)
    {
        $car_id = decrypt($id);
        $car = Car::find($car_id);
        return view('guest.single_car',compact('car'));
    }

   

}

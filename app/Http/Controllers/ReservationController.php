<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;
use Auth;

class ReservationController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');

    }


     public function create(Request $request,Reservation $reservation){

// return $request->all();
        $res = new Reservation;
        $res->reservation_id = $reservation->reservationID(15);
        $res->client_id = Auth::id();
        $res->car_id = $request->car_id;
        $res->pick_up = $request->pick_up_date;
        $res->drop_off = $request->drop_off_date;
        $res->location = $request->pickup_location;
        $res->amount_paid = $request->hire_cost;
        $res->save();

        $notify = array('type' => 'success', 'msg' => 'Reservation Successful');

        return redirect()->back()->with($notify);

    }


    public function history()
    {
      $res = Reservation::where('client_id',Auth::id())->where('status','completed')->get();
    }

    public function findOne($id = null){
        $reservation =  Reservation::where('id', $id)->with('Car')->first();

      return $reservation;
    }

    public function show()
    {

      $myReservation =  Reservation::where('client_id', Auth::id())->orderBy('status')->paginate(3);


      return view('reservations.index',compact('myReservation'));
    }

    public function cancelReservation(Request $request,$id = null)
    {
       Reservation::where('client_id',Auth::id())->update(['status' => 'cancelled']);

       $notify = array( 'type' => 'error',  'msg' => 'Reservation has been cancelled ');
       return redirect()->back()->with($notify);



    }


    public function callback(Request $request)
    {

        Reservation::where('reservation_id',$request->reservation_id)->update(['status' => 'completed']);

        $notify = array( 'type' => 'error',  'msg' => 'Payment success.....');
        return $notify;


    }

}

<?php

namespace App\Http\Controllers;

use App\Car;
use App\User;
use App\Reservation;


use Illuminate\Http\Request;

class AdministratorController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }


    //manage cars


    public function getAllCars(Car $car){
        $cars = $car->all();
        return view('admin.cars.index',compact('cars'));
    }



   public function getReservation(){

    $reservation = Reservation::all();

    // return $reservation->Client;

    return view('admin.reservation.index',compact('reservation'));


    }

   public function getClientS(){

    $client = User::all();

    // return $reservation->Client;

    return view('admin.client.index',compact('client'));


    }


    public function manageUsers($case)
    {

        switch ($case) {
            case 'view':
                $user = User::all();
                return $user;
                break;
            case 'edit':
                
                break;
            case 'delete':
                
                break;
            
            default:
            $user = User::all();

            return $user;
                break;
        }





       
    
    }










}

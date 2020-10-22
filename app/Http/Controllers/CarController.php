<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;
use mysql_xdevapi\Exception;
use Illuminate\Support\Facades\Auth;

class CarController extends Controller
{
    /**
     * Allowed extensions to upload attachment
     * [Images / Files]
     *
     * @var
     */
    public static $allowed_images = ['png', 'jpg', 'jpeg', 'gif'];
    public static $allowed_files = ['zip', 'rar', 'txt', 'pdf', 'doc'];

    /**
     * This method returns the allowed image extensions
     * to attach with the message.
     *
     * @return array
     */
    public function getAllowedImages()
    {
        return self::$allowed_images;
    }

    /**
     * This method returns the allowed file extensions
     * to attach with the message.
     *
     * @return array
     */
    public function getAllowedFiles()
    {
        return self::$allowed_files;
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $cars = Car::all();

        return response()->json($cars);
    }

    public function findByName($name = null)
    {
        $find = Car::where('car_type', $name)->get();
        return response()->json($find);
    }

    public function findByID($id = null)
    {
        $find = Car::where('id', $id)->first();
        return $find;
    }

    function create(Request $request)
    {
        // return $request->all();
        $image1 = '';
        $image2 = '';
        $image3 = '';
        $car_documents_name;

        if ($request->has('image1')) {
            $image1 = $request->file('image1');
            $filename1 = 'image1' . $request->engine_num . '.' . 'png';
            $image1->move('storage/images', $filename1);
            // $imgdata = ['image' => $filename1];
            // array_push($images, $imgdata);
            $image1 = $filename1;
        }
        if ($request->has('image2')) {
            $image2 = $request->file('image2');
            $filename2 = 'image2' . $request->engine_num . '.' . 'png';
            $image2->move('storage/images', $filename2);
            // $imgdata = ['image' => $filename2];
            // array_push($images, $imgdata);
            $image2 = $filename2;
        }
        if ($request->has('image3')) {
            $image3 = $request->file('image3');
            $filename3 = 'image3' . $request->engine_num . '.' . 'png';
            $image3->move('storage/images', $filename3);
            // $imgdata = ['image' => $filename3];
            // array_push($images, $imgdata);
            $image3 = $filename3;
        }
        if ($request->has('car_documents')) {
            $car_documents = $request->file('car_documents');
            $filename =
                'documents_' . $car_documents->getClientOriginalExtension();
            $car_documents->move('storage/documents', $filename);
            $car_documents_name = $filename;
        }

        $car = new Car();

        $car->car_name = $request->car_name;
        $car->car_type = $request->car_type;
        $car->car_model = $request->car_model;
        $car->car_color = $request->car_color;
        $car->gear_type = $request->gear_type;
        $car->car_documents = $car_documents_name;
        $car->size_of_tyre = $request->tyre_size;
        $car->plate_num = $request->plate_num;
        $car->hire_cost = $request->hire_cost;
        $car->capacity = $request->capacity;
        $car->engine_num = $request->engine_num;
        $car->year_of_make = $request->year_of_make;
        $car->description = $request->description;
        $car->image1 = $image1;
        $car->image2 = $image2;
        $car->image3 = $image3;
        $car->ac = $request->ac == 'on' ? 1 : 0;
        $car->fuel = $request->fuel == 'on' ? 1 : 0;
        $car->save();

        $notify = [
            'type' => 'success',
            'msg' => 'New Car Has been added',
        ];

        return redirect()
            ->back()
            ->with($notify);
    }

    function update(Request $request)
    {
        //        return $request;
        $data = [
            'car_name' => $request->car_name,
            'car_type' => $request->car_type,
            'car_model' => $request->car_model,
            'plate_num' => $request->plate_num,
            'capacity' => $request->capacity,
            'hire_cost' => $request->hire_cost,
        ];

        Car::where('id', $request->car_id)->update($data);

        $notify = [
            'type' => 'success',
            'msg' => 'Updated Car succesfully',
        ];

        return redirect()
            ->back()
            ->with($notify);
    }

    public function delete($id)
    {
        Car::find($id)->delete();

        return 'successful';
    }
}

<?php
namespace App\Http\Controllers;
use App\Http\Requests\CarRequest;
use App\Http\Resources\CarCollection;
use App\Http\Resources\Car as CarResource;
use App\Car;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use Storage;

class CarController extends Controller
{
        public function __construct()
        {
            $this->middleware('auth:api')->except('index','show');
        }
    
       
        public function index()
        {
           
            return CarCollection::collection(Car::paginate(12));
        }
        
        public function store(CarRequest $request)
        {
            $car = new Car;
            $car->name = $request->name;
            $car->price = $request->price;
            $car->year = $request->year;
         
            if($request->hasfile('image'))
            {
    
                foreach($request->file('image') as $file)
                {
                    $name=$file->getClientOriginalName();
                    $file->move(public_path().'/files/', $name);  
                    $data[] = $name;  
                }
            }
            $file= new File();
            $file->filename= json_encode($data);
            $car->image = $file;
            $car->save();
    
           return response([
    
             'data' => $car
    
           ],Response::HTTP_CREATED);
    
        }
    
        public function show(Car $car)
        {
            return new CarResource($car);
        }
        
        public function update(Request $request, Car $car)
        {   
            $this->userAuthorize($car);
    
         
            $car = new Car;
            $car->name = $request->name;
            $car->price = $request->price;
            $car->year = $request->year;
            if($request->hasfile('image'))
            {
                foreach($request->file('image') as $file)
                {
                    $name=$file->getClientOriginalName();
                    $file->move(public_path().'/files/', $name);  
                    $data[] = $name;  
                }
            }
            $file= new File();
            $file->filename=json_encode($data);
            $car->image = $file;
            $car->update();
    
           return response([
    
             'data' => $car
    
           ],Response::HTTP_CREATED);
    
        }
       
        public function destroy(Car $car)
        {
            $car->delete();
    
            return response(null,Response::HTTP_NO_CONTENT);
        }
    
         public function userAuthorize($car)
        {
            if(Auth::user()->id != $car->user_id){
                //throw your exception text here;
                return 'No estas logueado en la aplicacion';
            }
        }
    
 
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Custom\StatusController;
use Illuminate\Support\Facades\Log;
use Validator;
use App\User;

class registerController extends Controller
{
      /**
     * @param Request $request
     * @return json
     */
    public function register(Request $request){
        try {

            //validando datos de entrada
            $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required| min:6| max:30 ',
            'confirmPassword' => 'required|same:password|min:6'
            ]);
            
            //verificando si pasa la validación
            if ($validator->passes()) {
                //proceso de registro de usuario
                return response()->json(User::setRegister($request));  
            }
           
            //retorn error si algún dato es invalido
            return StatusController::successfullMessage(400, "Not Register Error Validation", false, 0, ['error'=>$this->validateData($request, $validator)]);
            //
          } catch (\Exception $e) {
              Log::info("Error exception register user./" . $e->getMessage());
              return StatusController::successfullMessage(102, "Register_Error_user", false, 0, ['error' => [$e->getMessage()]]);
          }
    }
    
    /**
     * Generanted data validation individual errors
     *
     * @param  mixed $request
     * @param  mixed $validator
     * @return void
     */
    public function validateData($request, $validator){

        $errorsList = [];
        foreach ($request->all() as $key => $value) {
            foreach ($validator->errors()->get($key) as $message) {
                $errorsList[$key] = $message;  
            }
          }
        return $errorsList;

    }
}

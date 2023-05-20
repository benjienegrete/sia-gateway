<?php
namespace App\Traits;
use Illuminate\Http\Response;
trait ApiResponser
{

public function successResponse($data, $code = Response::HTTP_OK)
{
//return response()->json(['data' => $data, 'site' => 2], $code);
return response($data, $code)->header('Content-Type',
'application/json');
}




public function errorResponse($message, $code)

{
//return response()->json(['error' => $message, 'site' => 2, 'code' => $code],$code);
return response($data, $code)->header('Content-Type',
'application/json');
}



public function errorMessage($message, $code)
{
return response($message, $code)->header('Content-Type',
'application/json');
}
}
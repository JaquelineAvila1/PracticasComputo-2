<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;

class TestControler extends BaseController{
 //metodos
  public function index(){
   //   return "Primer controlador";
   $arrayData = array(
   "title" => "Programación IV",
   "description" => "Primera aplicacion con Laravel",
   "studentName" => "Jaqueline"
  );

   return View("Test/index")->with($arrayData);
  }

}




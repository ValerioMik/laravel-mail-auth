<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


use App\Videogame;
use App\Mail\VideogameDeleteMail;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{
   public function getVideogames(){

        $videogames = Videogame::all();

       return json_encode($videogames);
   }

   public function deleteVideogame($id){
      $videogame = Videogame::findOrFail($id);
      $videogame ->delete();

      Mail::to(Auth::user() -> email)-> send(new VideogameDeleteMail( $videogame));
      Mail::to('admin@miosito.com')-> send(new VideogameDeleteMail( $videogame));


      return json_encode($videogame);
   }
}

<?php

namespace App\Http\Controllers;
use App\Models\Supplier;
use App\Models\SupInd;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use App;

use Illuminate\Http\Request;

class testController extends Controller
{
//     public function indexss(){

//        $id = 1;
//          $sup = DB::table('sup_inds')->where('supID',$id);

//   //$sup = SupInd::find(1);
//         dd($sup);
//       //  return view('home');

// }
// function get()
//     {
//         $pdf = App::make('dompdf.wrapper');
//         $pdf->loadHTML('<h1>Hello small pdf</h1>');
//         return $pdf->stream();
//     }

public function indexss(){

    $id = 1;
      $sup = DB::table('inquries');

//$sup = SupInd::find(1);
    dd($sup);
   //  return view('home');

//    $post = Customer::find(1);
 
//    $comments = $post->inquiries;
    
//    dd($comments);


}

}

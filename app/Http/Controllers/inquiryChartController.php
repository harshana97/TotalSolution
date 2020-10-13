<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use mikehaertl\wkhtmlto\Pdf;
use App\Models\Customer;
use App\Models\Inquiry;
use App\Models\Products;
use Illuminate\Support\Facades\DB;
use App;

class inquiryChartController extends Controller
{
    /**
     * Write code on Construct
     *
     * @return \Illuminate\Http\Response
     */
    public function preview()
    {

        $inquiry = new Inquiry;
        $customer = new Customer;
        $products = new Products;

        $new = DB::table('inquiries')->where('status','New')->count();
        $active =DB::table('inquiries')->where('status','Active')->count();
       $expired =DB::table('inquiries')->where('status','Expired')->count();

       $data = compact('new','active','expired');

//dd($new ,$active ,$expired);
//dd(view('inquirychart')->with(['chartdata'=>$data]));

        return view('inquirychart')->with(['chartdata'=>$data]);
    }
  
    /**
     * Write code on Construct
     *
     * @return \Illuminate\Http\Response
     */
    public function download()
    {
        $render = view::make('resources\views\inquirychart')->render();
  
        $pdf = new Pdf;
        $pdf->addPage($render);
        $pdf->setOptions(['javascript-delay' => 5000]);
        $pdf->saveAs(public_path('report.pdf'));
   
        return response()->download(public_path('report.pdf'));
    }
}

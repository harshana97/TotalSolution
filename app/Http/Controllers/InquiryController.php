<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use App\Models\Inquiry;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use App;
use PDF;

class InquiryController extends Controller
{
    public function getCustomerForInquiry(Request $request){

        // dd($request->all());

         $cust = $request->all();
         $custs=$request->getCustomer;

         

       //  $sup = DB::table('customers')->where((CONCAT(cFname,' ',cLname),$custs)->first();

        $inqCus = new Customer;

         $inqCus = DB::table('customers')->select("*",DB::raw("CONCAT(customers.cFname,' ',customers.cLname) AS full_name"))->get()->where('full_name',$custs);

          
       //  $users = DB::table('users')->select("*", DB::raw("CONCAT(users.first_name,' ',users.last_name) AS full_name"))
       // ->get();
      // $sup = DB::table('customers')->where('full_name',$custs);

        // if($cust == "lk lk"){
        // dd($inqCus);
          // dd($inqCus->cusid);
        // }else{dd("yes");}

    // dd($sup);

 
 //dd(view('addInquiry')->with('inqCus',$inqCus));
   return view('addInquiry')->with('custo',$inqCus);

   

    }

    public function addInquiry(Request $request){

      $inqu = new Inquiry;
      

      $inqu->inq_cusID=$request->cus_id;
      $inqu->submitDate=$request->inq_submit;
      $inqu->cloasingDate=$request->inq_finish;
      $inqu->inqTitle=$request->inquiry_title;
      $inqu->status=$request->status;

      $inqu->save();

      $last3 = DB::table('inquiries')->latest('inquiryid')->first();


      $product1 = new Products;
      $product2 = new Products;
      $product3 = new Products;
      $product4 = new Products;
      $product5 = new Products;

      $product1->pro_inqID=$last3->inquiryid;
      $product1->proName=$request->pro1;
      $product1->qty=$request->quan1;
      $product1->pro_induID=$request->ind1;

      $product1->save();

    
      $product2->pro_inqID=$last3->inquiryid;
      $product2->proName=$request->pro2;
      $product2->qty=$request->quan2;
      $product2->pro_induID=$request->ind2;

      $product2->save();
 
      $product3->pro_inqID=$last3->inquiryid;
      $product3->proName=$request->pro3;
      $product3->qty=$request->quan3;
      $product3->pro_induID=$request->ind3;

      $product3->save();
    
      $product4->pro_inqID=$last3->inquiryid;
      $product4->proName=$request->pro4;
      $product4->qty=$request->quan4;
      $product4->pro_induID=$request->ind4;

      $product4->save();
    
      $product5->pro_inqID=$last3->inquiryid;
      $product5->proName=$request->pro5;
      $product5->qty=$request->quan5;
      $product5->pro_induID=$request->ind5;

      $product5->save();


    // dd($last3->inquiryid);
      
      $pro1 = new Products;

      $pro1->pro_inqID=$last3->inquiryid;
      $pro1->pro_induID=$request->ind1;
      $pro1->proName=$request->pro1;
      $pro1->qty=$request->quan1;
      $pro1->save();

      $pro2 = new Products;

      $pro2->pro_inqID=$last3->inquiryid;
      $pro2->pro_induID=$request->ind2;
      $pro2->proName=$request->pro2;
      $pro2->qty=$request->quan2;
      $pro2->save();

      $pro3 = new Products;

      $pro3->pro_inqID=$last3->inquiryid;
      $pro3->pro_induID=$request->ind3;
      $pro3->proName=$request->pro3;
      $pro3->qty=$request->quan3;
      $pro3->save();

      $pro4 = new Products;

      $pro4->pro_inqID=$last3->inquiryid;
      $pro4->pro_induID=$request->ind4;
      $pro4->proName=$request->pro4;
      $pro4->qty=$request->quan4;
      $pro4->save();

      $pro5 = new Products;

      $pro5->pro_inqID=$last3->inquiryid;
      $pro5->pro_induID=$request->ind5;
      $pro5->proName=$request->pro5;
      $pro5->qty=$request->quan5;
      $pro5->save();

    //  $inqu  = $request->all();
      //  dd($pro1);






      $data=Inquiry::all();
    
    
      
     
     
     return view('inquiryView')->with('inqu',$data);

    //return redirect()->back();

    }

    
    public function getactiveActive($inquiryid){

      $inquiry=new Inquiry;

      $inquiry = DB::table('inquiries')->where('inquiryid',$inquiryid)->update(array('status'=>"Expired"));
   
      return redirect()->back();

  }

  
  public function getactiveExpired($inquiryid){

    $inquiry=new Inquiry;

    $inquiry = DB::table('inquiries')->where('inquiryid',$inquiryid)->update(array('status'=>"Active"));
 
    return redirect()->back();



    // $inquiry=Inquiry::find($inquiryid);
    // $inquiry->status == "Active";
    // $inquiry->save();
    // return redirect()->back();

}

  
public function getnewNew($inquiryid){

  $inquiry=new Inquiry;

    $inquiry = DB::table('inquiries')->where('inquiryid',$inquiryid)->update(array('status'=>"Active"));
 
    return redirect()->back();


  // $inquiry=Inquiry::find($inquiryid);
  //     $inquiry->status == "Active";
  //     $inquiry->save();
  // return redirect()->back();

}


public function getnewActive($inquiryid){

  $inquiry=new Inquiry;

  $inquiry = DB::table('inquiries')->where('inquiryid',$inquiryid)->update(array('status'=>"New"));

  return redirect()->back();



  // $inquiry=Inquiry::find($inquiryid);
  //     $inquiry->status == "New";
  //     $inquiry->save();
  // return redirect()->back();

}


public function getexprieExpired($inquiryid){

  $inquiry=new Inquiry;
// dd($inquiryid);
  $inquiry = DB::table('inquiries')->where('inquiryid',$inquiryid)->update(array('status'=>"Active"));

 // dd( $inquiry);

  // return redirect()->back();


  // $inquiry=Inquiry::find($inquiryid);
  //     $inquiry->status == "Active";
      // $inquiry->save();
  return redirect()->back()->with('inqu',$inquiry);

 //return view('inquiryView')->with('inqu',$inquiry);

}


public function getexpireActive($inquiryid){

  $inquiry=new Inquiry;

  $inquiry = DB::table('inquiries')->where('inquiryid',$inquiryid)->update(array('status'=>"Expired"));

  return redirect()->back();

  // $inquiry=Inquiry::find($inquiryid);
  //     $inquiry->status == "Expired";
  //     $inquiry->save();
  // return redirect()->back();

}

public function setDeleteInquiry($inquiryid){

  $inquiry=new Inquiry;

  $inquiry = DB::table('inquiries')->where('inquiryid',$inquiryid);

  $inquiry->delete();

  return redirect()->back();

}

public function setViewInquiryPdf($inquiryid){

  $inquiry = new Inquiry;
  $customer = new Customer;
  $product = new Products;

  $inquiry = DB::table('inquiries')->where('inquiryid',$inquiryid)->first();
  $customer = DB::table('customers')->where('cusid',$inquiry->inq_cusID)->first();
  $product  = DB::table('products')->where('pro_inqID',$inquiryid)->get();

  //$data['product']
  //$product=DB::select('SELECT * FROM products WHERE name = "'.Input::get('name').'"');;

  //dd($product);

// dd($data);

 // $inquir->inq_cusID = $inquiry->inq_cusID;
 

// dd(view('viewOneInquiry')->with('data', compact('inquiry','customer','product')));


      //  $pdf = App::make('dompdf.wrapper');
        // $data = [
        //   // 'title' => 'Welcome to ItSolutionStuff.com',
        //   // 'date' => date('m/d/Y')
          
        //  // compact('inquiry','customer','product'));
        // ];
        // $pdf->loadHTML($data);
        // return $pdf->stream();

          $data = compact('inquiry','customer','product');
       // $data=array('inquiry'=>$inquiry,'customer'=>$customer,'product'=>$product);
      //  $data['user']=User::all();
       // $data['employer']=employer::all()

        $pdf = PDF::loadView('viewOneInquiry',['data'=>$data]);
    

       // return $pdf->download('itsolutionstuff.pdf');

       return $pdf->stream();
//return view('viewOneInquiry')->with('data', compact('inquiry','customer','product'));

  
}


public function setUpdateInquiry($inquiryid){

  $inquiry = new Inquiry;
  $customer = new Customer;
  $product = new Products;

  $inquiry = DB::table('inquiries')->where('inquiryid',$inquiryid)->first();
  $customer = DB::table('customers')->where('cusid',$inquiry->inq_cusID)->first();
  $product  = DB::table('products')->where('pro_inqID',$inquiryid)->get();
 
  $data = compact('inquiry','customer','product');

  return view('inquiryUpdate')->with(['data'=>$data]);

}

public function getUpdateInquiry(Request $request){

  $inquiry = new Inquiry;
  
  $product1 = new Products;
  $product2 = new Products;
  $product3 = new Products;
  $product4 = new Products;
  $product5 = new Products;

  $inquiry->inquiryid=$request->inqu_id;
  $inquiry->cloasingDate=$request->inq_finish;

  $product1->proid=$request->pro1_id;
  $product1->proName=$request->pro1;
  $product1->qty=$request->quan1;
  $product1->pro_induID=$request->ind1;

  $product2->proid=$request->pro2_id;
  $product2->proName=$request->pro2;
  $product2->qty=$request->quan2;
  $product2->pro_induID=$request->ind2;

  $product3->proid=$request->pro3_id;
  $product3->proName=$request->pro3;
  $product3->qty=$request->quan3;
  $product3->pro_induID=$request->ind3;

  $product4->proid=$request->pro4_id;
  $product4->proName=$request->pro4;
  $product4->qty=$request->quan4;
  $product4->pro_induID=$request->ind4;

  $product5->proid=$request->pro5_id;
  $product5->proName=$request->pro5;
  $product5->qty=$request->quan5;
  $product5->pro_induID=$request->ind5;

  $inquiry = DB::table('inquiries')->where('inquiryid',$inquiry->inquiryid)->update(array('cloasingDate'=>$inquiry->cloasingDate));

  $product1 = DB::table('products')->where('proid',$request->pro1_id)->update(array('proName'=>$request->pro1, 'qty'=>$request->quan1, 'pro_induID'=>$request->ind1 ));
  $product2 = DB::table('products')->where('proid',$request->pro2_id)->update(array('proName'=>$request->pro2, 'qty'=>$request->quan2, 'pro_induID'=>$request->ind2 ));
  $product3 = DB::table('products')->where('proid',$request->pro3_id)->update(array('proName'=>$request->pro3, 'qty'=>$request->quan3, 'pro_induID'=>$request->ind3 ));
  $product4 = DB::table('products')->where('proid',$request->pro4_id)->update(array('proName'=>$request->pro4, 'qty'=>$request->quan4, 'pro_induID'=>$request->ind4));
  $product5 = DB::table('products')->where('proid',$request->pro5_id)->update(array('proName'=>$request->pro5, 'qty'=>$request->quan5, 'pro_induID'=>$request->ind5 ));

  $data = compact('inquiry','product1','product2','product3','product4','product5');

 // return view('inquiryView')->with(['inqu'=>$data]);

 return redirect()->back();

}

}

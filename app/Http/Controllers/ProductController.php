<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apimodel;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $data = Apimodel::latest()->get(); 
      return view('admin.index',compact('data'))->with('no', 1);   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


       // if ($request -> hasFile('image')) {
           
       //     $img = $request -> file('image');

       //     $unique_photo_name = md5(time().rand()).'.'.$img -> getClientOriginalExtension();

       //     $img -> move(public_path('media/images/'),$unique_photo_name);
       //  }
       

     

      Apimodel::create([

        'name'          => $request -> name,
        'description'   => $request -> description,
        'price'         => $request -> price,
        'image'         => $unique_photo_name,






      ]);


       return response()->json([
        "message" => "student record created"
    ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


        public function damnApi()
    {
              $data = Apimodel::latest()->get(); 


               $app_data = [


         'status' =>  true,
         'msg' =>  'everything is fine',
         'customers' => $data,



      ];

      return response()->json($app_data); 

    }        


    public function singleProApi($id)
    {
              $data = Apimodel::find($id); 


               $app_data = [


         'status' =>  true,
         'msg' =>  'everything is fine',
         'customers' => $data,



      ];

      return response()->json($app_data); 

    }



    public function upProduct($id)
    {
              $data = Apimodel::find($id); 


               $app_data = [


         'status' =>  true,
         'msg' =>  'everything is fine',
         'customers' => $data,



      ];

      return response()->json($app_data); 

    }



  public function updateProduct(Request $request)
    {
     
        if ($request -> hasFile('image')) {
            $img = $request -> file('image');
            $unique_photo_name  = md5(time().rand()).'.'.$img -> getClientOriginalExtension();
             $img -> move(public_path('media/images/'),$unique_photo_name);

        }



      $id = $request -> id;
      $data = Apimodel::find($id);
      $data -> name = $request -> name;
      $data -> price = $request -> price;
      $data -> description = $request -> description;
      $data -> image = $unique_photo_name;

      $final = $data -> update();
      return response()->json($final);
    }

    public function deleteProduct($id)
    {
        $data = Apimodel::findOrFail($id);
        $final = $data -> delete();
        return response()->json($final);
    }
}

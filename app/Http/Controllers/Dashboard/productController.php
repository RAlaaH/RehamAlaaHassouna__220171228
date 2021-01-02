<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\product;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $products = DB::table('products')->insert([
            ['name' => 'Dell 5521',
            'laptopCapacity' => 'HLT',
            'laptopType' => 'Dell',
            'healer' => 'Intel® Core™ i5-3317U (3M Cache, up to 2.7 GHz)',
            'memorySize' => ' 750 GB ,SATA ,5400 rpm',
            'price' => '4,666',
            'screenResolution' => 'AMD Radeon HD8750M 2GB DDR3',
            'theTypeOfHardDisk' => 'AMD Radeon HD8750M 2GB DDR3',
            'batteryLife' => ' 6-cell/65 WHr battery',
            'system' => 'Windows 8, 64-bit',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::tomorrow()
            ],

            ['name' => 'hp pavilion 15-n031se',
                'laptopCapacity' => 'HLT',
                'laptopType' => 'HP',
                'healer' => 'Intel® Core™ i5-4200U Processor (3M Cache,1.6 GHz up to 2.60 GHz)',
                'memorySize' => ' 4 GB DDR3',
                'price' => '4,444',
                'screenResolution' => 'NVIDIA GeForce GT 740M (2 GB DDR3 dedicated)',
                'theTypeOfHardDisk' => '500 GB SATA (5400 rpm)',
                'batteryLife' => '4-cell Li-Ion',
                'system' => 'Windows 8, 64-bit',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::tomorrow()
            ],

            ['name' => 'Dell 5521',
                'laptopCapacity' => 'HLT',
                'laptopType' => 'Dell',
                'healer' => 'Intel® Core™ i5-3317U (3M Cache, up to 2.7 GHz)',
                'memorySize' => ' 750 GB ,SATA ,5400 rpm',
                'price' => '4,666',
                'screenResolution' => 'AMD Radeon HD8750M 2GB DDR3',
                'theTypeOfHardDisk' => 'AMD Radeon HD8750M 2GB DDR3',
                'batteryLife' => ' 6-cell/65 WHr battery',
                'system' => 'Windows 8, 64-bit',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::tomorrow()
            ]



        ]);

        DB::table('products')->update([
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::tomorrow(),
        ]);

//        dd($products);

//        $products = DB::table('products')->where('laptopType','HP')->get();
//        dd($products);

//        $products = DB::table('products')->find(3);
//        dd($products);

//        $products = DB::table('products')->where('laptopType','Dell')->first();
//        dd($products);

//        $product = DB::table('products');
//        dd($product);



        return view('dashboard.products.product',compact('products'));
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
        //
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
}

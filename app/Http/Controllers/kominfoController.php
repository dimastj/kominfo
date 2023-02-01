<?php

namespace App\Http\Controllers;
use Livewire\Component;
use App\Models\User;
use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;


class kominfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$response = Http::get('www.themealdb.com/api/json/v1/1/filter.php?i=chicken_breast');
        $response = Http::get('https://demo5.kab-bantul.id/api/users');
         
         if ($response->toPsrResponse()->getStatusCode() == 200) {
             $data = json_decode($response); //bisa  di  untuk mengetahui struktur arraynya
         } else {
             $data = []; //atau bisa tampilkan pesan jika data tidak ada
         }
         $i=0;
         foreach ($data as $item){
            foreach ($item as $i){
                $lat = (string)$i->address->coordinates->lat; 
                $long = (string)$i->address->coordinates->lng; 
                //var_dump($long);  var_dump($lat);die;
                $responsecontry = Http::get('https://demo5.kab-bantul.id/location/?lat='.$lat.'&long='.$long);
                if ($responsecontry->toPsrResponse()->getStatusCode() == 200) {
                    $contry = json_decode($responsecontry); //bisa  di  untuk mengetahui struktur arraynya
                } else {
                    $contry = []; //atau bisa tampilkan pesan jika data tidak ada
                }
                
            }
            dd( $contry);
           
         }
        

        // return view('kominfo.index')->with('data', $data,'contry');
        // return view('kominfo.index', [
        //     'data' => $data
        // ]);
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

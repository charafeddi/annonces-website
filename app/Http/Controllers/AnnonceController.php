<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnnonceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $row=DB::table('categories')->get();
        $cities=["Azrou","Al Hoceima","Aït Melloul","Ain Harrouda","Agadir","Bouskoura",
            "Berrechid","Berkane","Benslimane","Beni Mellal","Beni Ansar","Ben Guerir","Casablanca",
            "Drargu","Dcheira El Jihadia","Dar Bouazza","Essaouira","Errachidia","El Kelaa Des Sraghna",
            "El Jadida","Fquih Ben Salah","Fnideq","Fez","Guercif","Guelmim","Inezgane",
            "Ksar El Kebir","Khouribga","Khenifra","Khemisset","Kenitra","Lqliaa","Larache","Lahraouyine",
            "Mohammedia","Midelt","Meknes","Martil","Marrakesh","M'diq","Nador","Oulad Teima",
            "Oujda","Oued Zem","Ouazzane","Ouarzazate","Rabat","Suq as-Sabt Awlad an-Nama",
            "Souk El Arbaa","Skhirat","Sidi Slimane","Sidi Kacem","Sidi Bennour",
            "Settat","Sefrou","Salé","Safi","Tiznit","Tifelt", "Tetouan", "Temara", " Taza", "Taroudant", "Taourirt", "Tangier", "Tan-Tan", " Youssoufia",];
        $data=[
            'cities'=>$cities,
            'categories'=>$row
        ];
        return view('createannonce',$data);
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

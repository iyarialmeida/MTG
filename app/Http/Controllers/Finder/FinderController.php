<?php

namespace App\Http\Controllers\Finder;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Conection;

class FinderController extends Controller
{   
    function __construct(){

        $this->middleware('auth');

    }
    //------------------------------
    public function index(){

        $cliente = new Conection();

        $query = [
            'type' => "land"
        ];

        $collection = $cliente->getCollection( 'v1/cards', $query );
        
        return view( 'finder.index', ['collection' => $collection]);

    }
/************************************************* */
}

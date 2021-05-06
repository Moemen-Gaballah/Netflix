<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\CategoryTrait;
use App\Http\Traits\EntityTrait;
use App\Http\Traits\VideoTrait;
use App\Http\Traits\VideoProgressTrait;

class HomeController extends Controller
{
    use CategoryTrait;
    use EntityTrait;
    use VideoTrait;
    use VideoProgressTrait;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $entity = $this->getRandomEntity();
        $categories = $this->getAllCategories();
        
        return view('pages.index', compact(['entity', 'categories']));
    } // Page /  


    public function showMovies()
    {   
        $entity = $this->getRandomEntityForMovie();
        $categories = $this->getAllMovies();

        return view('pages.movies', compact(['entity', 'categories']));
    } // paage show movies 


    // public function getProgress(){

    // }

}

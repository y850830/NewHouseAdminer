<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\NewsCateg;

class HomeController extends Controller
{
    public function board($school)
    {
        return view('pages.board',[
            'school' => $school,
            'posts' => NewsCateg::all(),
        ]);
    }
}
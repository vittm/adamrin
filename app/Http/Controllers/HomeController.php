<?php
namespace App\Http\Controllers;
use App\User;
use DB;
use Auth;
use App\Http\Requests;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');            
    }
}
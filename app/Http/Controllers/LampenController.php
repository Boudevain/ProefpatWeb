<?php # app\Http\Controllers\TemperatuurController.php
 // CONTROLLER
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Parts;
use App\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class LampenController extends Controller
{
 public function index(Request $request)
 {
    $products = DB::table('products')->get();
    // $parts = DB::table('parts')->get();

    $search = $request->get('search');
    $parts = DB::table('parts')->where('specs','like','%/'.$search.'W%')->paginate(50);
    // dd($parts);

    return view('lampen', ['products' => $products], ['parts' => $parts]);
 }
} 
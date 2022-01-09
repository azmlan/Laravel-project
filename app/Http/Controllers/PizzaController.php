<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pizza;

class PizzaController extends Controller
{
  // this is auth for all of the controllers 
  // public function __construct(){
  //   $this->middleware('auth');
  // }
  public function index()
  {

    $JHpizza = Pizza::all();
    //$JHpizza = Pizza::orderBy('type','desc')->get();
    //$JHpizza = Pizza::where('name','mario')->get();
    //$JHpizza = Pizza::latest()->get();


    return view('pizzas.index', ['pizzas' => $JHpizza]);
  }

  public function show($JHid)
  {

    $JHpizza = Pizza::FindOrFail($JHid);
    return view('pizzas.show', ['pizza' => $JHpizza]);
  }

  public function create()
  {

    return view('pizzas.create');
  }

  public function store()
  {

    $pizza = new Pizza();
    $pizza->name = request('name');
    $pizza->type = request('type');
    $pizza->base = request('base');
    $pizza->toppings = request('toppings');


    $pizza->save();


    return redirect('/')->with('msg', 'شكرا لطلبك  ');
  }

  public function destroy($JHid)
  {

    $pizza =  Pizza::FindOrFail($JHid);
    $pizza->delete();
    return redirect('/pizzas')->with('del', 'تم انشاء الطلب بنجاح');
  }
}

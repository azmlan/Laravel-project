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

  // Create Order With Ajax
  public function store(Request $request)
  {
    $order = Pizza::create([

      'type' => $request->type,
      'base' => $request->base,
      'name' => $request->name,
      'toppings' => $request->toppings,
    ]);

    if ($order)
      return response()->json([
        'status' => true,
        'msg' => 'تم حفظ الطلب'
      ]);
    else
      return response()->json([
        'status' => false,
        'msg' => 'هنالك خطأ في حفظ الطلب'
      ]);
  }

  // Without Ajax
  // public function store()
  // {

  //   $pizza = new Pizza();
  //   $pizza->name = request('name');
  //   $pizza->type = request('type');
  //   $pizza->base = request('base');
  //   $pizza->toppings = request('toppings');


  //   $pizza->save();


  //   return redirect('/')->with('msg', 'شكرا لطلبك  ');
  // }

  public function destroy($JHid)
  {

    $pizza =  Pizza::FindOrFail($JHid);
    $pizza->delete();
    return redirect('/pizzas')->with('del', 'تم انشاء الطلب بنجاح');
  }
}

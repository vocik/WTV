<?php

namespace App\Http\Controllers;

use App\Models\Doklad;
use App\Models\Product;
use Illuminate\Http\Request;

/**
 * Class DokladController
 * @package App\Http\Controllers
 */
class DokladController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doklads = Doklad::paginate();

        return view('doklad.index', compact('doklads'))
            ->with('i', (request()->input('page', 1) - 1) * $doklads->perPage())
            ->with("showButton", true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doklad = new Doklad();
        return view('doklad.create', compact('doklad'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Doklad::$rules);

        $doklad = Doklad::create($request->all());

        if (request()->has('image')) {
            $image = request()->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);

            $doklad->image = $name;
            $doklad->save();
        }

        return redirect()->route('doklads.edit', $doklad->id)
            ->with('success', 'Doklad created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $doklad = Doklad::find($id);
        $products = Product::where('doklad_id', $id)->paginate();

        return view('doklad.show',
            ["doklad" => $doklad, "products"=>$products]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doklad = Doklad::find($id);
        $products = Product::where('doklad_id', $id)->paginate();

        return view('doklad.edit',
            ["doklad" => $doklad, "products"=>$products]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Doklad $doklad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doklad $doklad)
    {
        request()->validate(Doklad::$rules);

        $doklad->update($request->all());

        if (request()->has('image')) {
            $image = request()->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);

            $doklad->image = $name;
            $doklad->save();
        }

        return redirect()->back()
            ->with('success', 'Doklad updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $doklad = Doklad::find($id)->delete();

        return redirect()->route('doklads.index')
            ->with('success', 'Doklad deleted successfully');
    }
        
    public function search(Request $request)
    {
        $obchod = $request->get('obchod');
        $doprava = $request->get('doprava');
        $cislo_objednavky = $request->get('cislo_objednavky');
        $datum_nakupu = $request->get('datum_nakupu');
        $cena_s_dph = $request->get('cena_s_dph');
        
        $doklads = Doklad::where("Obchod", "like", "%".$obchod."%") 
        -> where("doprava", "like", "%".$doprava."%") 
        -> where("cislo_objednavky", "like", "%".$cislo_objednavky."%")
        -> where("datum_nakupu", "like", "%".$datum_nakupu."%")
        -> where("cena_s_dph", "like", "%".$cena_s_dph."%")
        -> paginate();


        return view('doklad.index', compact('doklads'))
            ->with('i', (request()->input('page', 1) - 1) * $doklads->perPage())
            ->with("showButton", false);
    }

    public function search2(Request $request)
    {
        $name = $request->get('name');
        $product_code = $request->get('product_code');
        $product_price = $request->get('product_price');
        $type = $request->get('type');
        $doba_zaruky = $request->get('doba_zaruky');
        $pocet = $request->get('pocet');
        $extra = $request->get('extra');

        $products = Product::where("name", "like", "%".$name."%")
        -> where("product_code", "like", "%".$product_code."%")
        -> where("product_price", "like", "%".$product_price."%")
        -> where("type", "like", "%".$type."%")
        -> where("doba_zaruky", "like", "%".$doba_zaruky."%")
        -> where("pocet", "like", "%".$pocet."%")
        -> where("extra", "like", "%".$extra."%")
        -> paginate();

        return view('product.index', compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * $products->perPage())
            ->with("showButton", false);
    }
}
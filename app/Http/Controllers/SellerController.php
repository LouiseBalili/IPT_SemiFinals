<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;

class SellerController extends Controller
{
    public function index() {
        $sellers = Seller::orderBy('name')->get();

        return view('seller.index', [
            'sellers' => $sellers
        ]);
    }


    public function create() {
        return view('seller.create');
    }

    public function store(Request $request) {
        Seller::create([
            'name' => $request->name,
            'email' => $request->email,
            'product_type' => $request->product_type,
            'total_sales' => $request->total_sales,
        ]);

        return redirect('/sellers');
    }

    public function edit(Seller $sellers) {

        return view ('seller.edit',[
            'seller' => $sellers
        ]);
    }

    public function update(Request $request, $sellers){
        $input = $request->all();
        $sellers = Seller::find($sellers);
        $sellers->name=$input['name'];
        $sellers->email=$input['email'];
        $sellers->product_type=$input['product_type'];
        $sellers->total_sales=$input['total_sales'];

        $sellers->save();
        return redirect('/sellers');
    }

    public function delete(Seller $sellers) {

        return view('seller.delete', [
            'seller' => $sellers
        ]);
    }

    public function destroy($sellers){
        Seller::find($sellers)->delete();
        return redirect('/sellers');
    }
}

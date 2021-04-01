<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CurdController extends Controller
{
    public function __Construct()
    {
    }

    public function getOffers()
    {
        return Offer::select('id', 'name', 'price')->get();
    }

    // public function store()
    // {
    //     Offer::create([
    //         'name' => 'Offer3',
    //         'price' => '5000',
    //         'details' => 'offer details',
    //     ]);
    // }

    public function create()
    {
        return view('offers.create');
    }

    public function store(Request $request)
    {
        //validate data before insert to database


        $rules = $this->getRules();
        $messages = $this->getMessages();
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            // return $validator->errors();
            return redirect()->back()->withErrors($validator)->withInputs($request->all());
        }

        // $this->validate(request(), [
        //     'name' => 'required',
        //     'price' => 'required',
        //     'details' => 'required'
        // ]);

        // $user = User::create(request(['name', 'email', 'password']));

        // auth()->login($user);

        // return redirect()->to('/games');


        //insert to table in database
        Offer::create([

            'name' => $request->name,
            'price' => $request->price,
            'details' => $request->details,
        ]);

        // return view('offers.create');
        // return redirect()->to('/offers/create');

        return redirect()->back()->with(['success' => 'تم اضافة العرض بنجاح']);
    }

    protected function getRules()
    {
        return   $rules = [
            'name' => 'required|max:100|unique:offer,name',
            'price' => 'required|numeric',
            'details' => 'required'
        ];
    }

    protected function getMessages()
    {
        return  $messages = [
            'name.required' => __('messages.offer name required'),
            'price.numeric' => 'اسم السعر مطلوب',
            // 'price.required' => 'اسم السعر مطلوب',
            'details.required' => 'اسم التفاصيل مطلوب',
        ];
    }
}

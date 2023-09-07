<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\NewContact;
use Illuminate\Support\Facades\Mail;
class LeadController extends Controller
{
    public function store(Request $request){

        $data = $request->all();
        
        $new_lead= new Lead();
        $new_lead->fill($data);
        $new_lead->save();
        
        Mail::to('info@boolpress.com')->send(new NewContact($new_lead));

        return response()->json([
            'success' => true
        ]);
    }
}

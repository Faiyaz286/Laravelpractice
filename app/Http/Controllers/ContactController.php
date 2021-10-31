<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Contact;


class ContactController extends Controller
{
    public function saveContact(Request $request){

        $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|email|max:100',
            'mobile' => 'max:30',
            'comment' => 'required|min:2|max:1000',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("contact")->withSuccess('Thank you for contacting, we will get back to you soon.');
    }

    private function create(array $data)
    {
      return Contact::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'mobile' => $data['mobile'],
        'comment' => $data['comment']
      ]);
    }
}

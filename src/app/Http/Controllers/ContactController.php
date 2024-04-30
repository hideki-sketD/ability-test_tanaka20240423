<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Contact;

use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('index', ['categories' => $categories]);
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['last_name', 'first_name',
          'email', 'tel1', 'tel2', 'tel3', 'address', 'building', 'detail']);

        $gender = $request->input('gender');
        $category_id = $request->input('category_id');

        return view('confirm', compact('contact', 'gender', 'category_id'));
    }

    public function store(ContactRequest $request)
    {
        //$contact = (['tel' => $request->tel1 . $request->tel2 . $request->tel3] + $request->only(['last_name', 'first_name',
         // 'email', 'address', 'building', 'detail']));

          //$contact['gender'] = //$request->input('gender');
          //$contact['category_id'] = ///$request->input('category_id');

          //Contact::create($contact);

          return view('thanks');
    }
}

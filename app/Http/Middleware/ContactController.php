<?php

namespace App\Http\Controllers;

use App\Models\ContactInsert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
     public function index()
     {
          return view('welcome');
     }

     public function create(Request $request)
     {
          $rules = [
               'name' => 'required|string|min:3|max:255',
               'email' => 'required|string|email|max:255|',
               'phone' => 'required|string|min:3|max:255',
               'message' => 'required|string|min:3|max:255',
          ];
          $validator = Validator::make($request->all(), $rules);
          if ($validator->fails()) {
               return redirect('/#contact')
                    ->withInput()
                    ->withErrors($validator);
          } else {
               $data = $request->input();
               try {
                    DB::beginTransaction();
                    $contact = new ContactInsert();
                    $contact->name = $data['name'];
                    $contact->email = $data['email'];
                    $contact->phone = $data['phone'];
                    $contact->message = $data['message'];
                    $contact->save();
                    DB::commit();
                    return redirect('/#contact')->with('success', 'Pesan Sudah Diterima');
               } catch (\Exception $e) {
                    DB::rollback();
                    return redirect('/#contact')->with('error', 'Data Inserted Failed');
               }
          }
     }

     public function view()
     {
          $data = ContactInsert::all();
          return view('pesan', compact('data'));
     }

     public function delete($id)
     {
          $data = ContactInsert::find($id);
          $data->delete();
          return redirect('/pesan')->with('success', 'Data Deleted Successfully');
     }
}

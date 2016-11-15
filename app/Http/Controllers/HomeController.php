<?php
/**
 * Home Controller
 *  Controller used to update user account information
 * User: Kim Lawlor & Amanda Hamilton
 * Date: 2016-10-24
 */
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Validator;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    //update user account information
    public function update()
    {
        if (count(Input::all()) > 0) {

            $form = Input::all();

            $validator = Validator::make(
                array(
                    'name' => $form['name'],
                    'email' => $form['email'],
                    'address' => $form['address'],

                ),
                array(
                    'name' => 'required|max:255',
                    'email' => 'required|email|max:255',
                    'address' => 'required:min:2|max:255'
                ));
            if ($validator->passes()) {

                $user = Auth::user();

                $user->name = $form['name'];
                $user->email = $form['email'];
                $user->address = $form['address'];

                $user->save();

                return back();

            }else {
                $errors = $validator->errors();
                foreach ($errors->all() as $message) {
                    $messages [] = $message;
                }

                return view ('users/error')->with('messages', $messages);
            }
        } else {
            return view('users/account')->with('user', Auth::user());
        }
    }
}

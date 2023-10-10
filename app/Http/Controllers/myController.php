<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class myController extends Controller
{
    protected $users;

    public function __construct(){
        $this->users = new User();
    }
   //Create
   public function saveData(){

   $UserData = [
        'name' => 'Wishma Roshen',
        'email' => 'sunil@gmail.com',
        'password' => '123'
    ];
}

   //Read
   public function showData(){
    $response['user'] = $this->users->all();
    return view('crud')->with($response);
   }

   //Update
   public function updateData(){

    $user_id = 3;

    $UserData = [
        'name' => 'saman Perera',
        'email' => 'saman@gmail.com',
        'password' => '123'
    ];

    $user = $this->users->find($user_id);
    $user->update(array_merge($user->toArray(), $UserData));
   }

   //Delete
   public function deleteData(){

    $User_id = 3 ;
    $user = $this->users->find($User_id);
    $user->delete();

   }
}

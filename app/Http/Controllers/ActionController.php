<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class ActionController extends Controller
{
    public function many()
    {

        // $user = User::create([
        //     'name' => 'John Doe',
        //     'email'=>'aa@gmail.com1',
        //     'password'=>'asdfqwert'
        // ]);

        // $user=User::find(7);

        // $role1 = Role::find(1);
        // $role2 = Role::find(2);

        // $user->roles()->attach([$role1->id, $role2->id]);


        // $usr=User->role();
        // //print_r($usr);
        // foreach ($usr as $user) {
        //     echo $user->name;//|$user->email|$user->role";  // Access the user's name property
        //    // echo $user->email; // Access the user's email property
        // }


        // $user = User::find(7);

        // echo $roles = $user->roles;

        $user=User::scopeUser7();

        echo $user->get_value();
        $userArray = $user->toJson();

        dd($userArray);
        foreach ($user->roles as $role) {
            echo "asdas".$role->id;
        }

    }
}

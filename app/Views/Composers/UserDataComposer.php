<?php

namespace App\Views\Composers;
use illuminate\View\View;

class UserDataComposer {
     public function compose(View $view) {
         $user=["name"=>"kuwy"];
         $view->with('userInfo', $user);
   }
}

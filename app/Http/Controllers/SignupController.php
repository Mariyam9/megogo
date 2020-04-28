<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SignupRequest;

class SignupController extends Controller
{
    public function submit(SignupRequest $s){
      //$validation = $s->validate([
      //  'name' => 'required|min:1|20',
      // 'e-mail' => 'required|min:6|30',
      //  'password' => 'required|min:8|30'
      //]);
    }
}

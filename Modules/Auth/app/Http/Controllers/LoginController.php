<?php

namespace Modules\Auth\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Auth\Http\Requests\LoginFormRequest;

class LoginController extends Controller
{
  public function __invoke()
  {
    $this->setTitle("Login");
    return $this->view("auth::login");
  }
  public function login(LoginFormRequest $loginFormRequest)
  {
    $da = $loginFormRequest->validated();
    dd($da);
  }
}

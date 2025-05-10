<?php

namespace Modules\Ppdb\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PendftaranController extends Controller
{
    public function index()
    {
        $this->setTitle("Welcome");
        return $this->view('ppdb::form-pendaftaran');
    }
}

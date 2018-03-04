<?php

namespace App\Http\Controllers;

use App\Traits\HashIdTrait;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    use ApiResponser, HashIdTrait;

}
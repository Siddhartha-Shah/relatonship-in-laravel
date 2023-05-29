<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
class MemberController extends Controller
{
    function show(){
        //return Member::with('getGroup')->get();
        return Member::find(3882)->getGroup;
    }
}

<?php

namespace App\Interface;

use Illuminate\Http\Request;

interface UserFonctionnality
{
    public function search(Request $request);
}
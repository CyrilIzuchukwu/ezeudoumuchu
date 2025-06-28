<?php

namespace App\Http\Controllers;

use App\Models\Tribute;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function adminDashboard()
    {

        // Get cover first, then ordered pages, then unordered pages
        $tributes = Tribute::orderBy('is_cover', 'desc')
            ->orderByRaw('ISNULL(page_number), page_number asc')
            ->get();

        return view('admin.index', compact('tributes'));
    }
}

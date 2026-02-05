<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PublicWebpageController extends Controller
{
    public function showHomepage(): View
    {
        return view( 'pages.public.index' );
    }

    public function showAccessibilityStatementPage(): View
    {
        return view( 'pages.public.accessibility-statement' );
    }
}

<?php

use App\Http\Controllers\Web\PublicWebpageController;
use Illuminate\Support\Facades\Route;

Route::get( '/', [ PublicWebpageController::class, 'showHomepage' ] )->name( 'page.home' );
Route::get( '/accessibility-statement', [ PublicWebpageController::class, 'showAccessibilityStatementPage' ] )->name( 'page.accessibility-statement' );
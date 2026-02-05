<?php

use App\Http\Controllers\Web\PublicWebpageController;
use Illuminate\Support\Facades\Route;

// Public
Route::name( 'public.' )->group( function() {
    Route::get( '/',         [ PublicWebpageController::class, 'showHomepage'     ] )->name( 'page.home'     );
    Route::get( '/services', [ PublicWebpageController::class, 'showServicesPage' ] )->name( 'page.services' );
    Route::get( '/products', [ PublicWebpageController::class, 'showProductsPage' ] )->name( 'page.products' );
    Route::get( '/about',    [ PublicWebpageController::class, 'showAboutPage'    ] )->name( 'page.about'    );
    Route::get( '/contact',  [ PublicWebpageController::class, 'showContactPage'  ] )->name( 'page.contact'  );

    Route::prefix( 'blog' )->name( 'blog.' )->group( function() {
        Route::get( '/',       [ PublicWebpageController::class, 'showBlogFeedPage' ] )->name( 'page.feed' );
        Route::get( '/{post}', [ PublicWebpageController::class, 'showBlogPostPage' ] )->name( 'page.post' );
    } );

    Route::get( '/accessibility-statement', [ PublicWebpageController::class, 'showAccessibilityStatementPage' ] )->name( 'page.accessibility-statement' );
    Route::get( '/privacy-policy',          [ PublicWebpageController::class, 'showPrivacyPolicyPage'          ] )->name( 'page.privacy-policy'          );
    Route::get( '/terms-of-service',        [ PublicWebpageController::class, 'showTermsOfServicePage'         ] )->name( 'page.terms-of-service'        );
} );
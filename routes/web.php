<?php

use App\Http\Controllers\Web\ContactController;
use App\Http\Controllers\Web\PublicWebpageController;
use Illuminate\Support\Facades\Route;

// Public
Route::name( 'public.' )->group( function() {
    Route::get( '/',         [ PublicWebpageController::class, 'showHomepage'     ] )->name( 'page.home'     );
    Route::get( '/services', [ PublicWebpageController::class, 'showServicesPage' ] )->name( 'page.services' );
    Route::get( '/products', [ PublicWebpageController::class, 'showProductsPage' ] )->name( 'page.products' );
    Route::get( '/about',    [ PublicWebpageController::class, 'showAboutPage'    ] )->name( 'page.about'    );

    // Contact page with form handling
    Route::get( '/contact',         [ ContactController::class, 'show'           ] )->name( 'page.contact'    );
    Route::post( '/contact',        [ ContactController::class, 'submit'         ] )->name( 'contact.submit'  );
    Route::get( '/contact/captcha', [ ContactController::class, 'refreshCaptcha' ] )->name( 'contact.captcha' );

    Route::prefix( 'blog' )->name( 'blog.' )->group( function() {
        Route::get( '/',       [ PublicWebpageController::class, 'showBlogFeedPage' ] )->name( 'page.feed' );
        Route::get( '/{post}', [ PublicWebpageController::class, 'showBlogPostPage' ] )->name( 'page.post' );
    } );

    Route::get( '/accessibility-statement', [ PublicWebpageController::class, 'showAccessibilityStatementPage' ] )->name( 'page.accessibility-statement' );
    Route::get( '/privacy-policy',          [ PublicWebpageController::class, 'showPrivacyPolicyPage'          ] )->name( 'page.privacy-policy'          );
    Route::get( '/terms-of-service',        [ PublicWebpageController::class, 'showTermsOfServicePage'         ] )->name( 'page.terms-of-service'        );
} );
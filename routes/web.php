<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/about-us', function () {
    return view('about-us.index');
});
Route::get('/contact-us', function () {
    return view('contact-us.index');
});
Route::get('/blog', function () {
    return view('blog.index');
});
Route::get('/coverage', function () {
    return view('coverage.index');
});
Route::get('/faq', function () {
    return view('faq.index');
});
Route::get('/partners-memberships', function () {
    return view('partners-memberships.index');
});
Route::get('/vision-and-mission', function () {
    return view('vision-and-mission.index');
});
Route::get('/careers', function () {
    return view('careers.index');
});

// Portfolio routes
Route::prefix('portfolio')->group(function () {
    Route::get('/domain-registrations-web-hosting-web-design', function () {
        return view('portfolio.domain-registrations-web-hosting-web-design.index');
    });
    Route::get('/optical-fiber-network-setup', function () {
        return view('portfolio.optical-fiber-network-setup.index');
    });
    Route::get('/software-development', function () {
        return view('portfolio.software-development.index');
    });
    Route::get('/structured-cabling-cctv-installations', function () {
        return view('portfolio.structured-cabling-cctv-installations.index');
    });
});

// Main navigation and service routes
Route::get('/services', function () {
    return view('services.index');
});
Route::prefix('services')->group(function () {
    Route::get('/infrastructure-networking', function () {
        return view('services.infrastructure-networking.index');
    });
    Route::get('/infrastructure-networking/dark-fiber', function () {
        return view('services.infrastructure-networking.dark-fiber.index');
    });
    Route::get('/fiber-optic-cabling', function () {
        return view('services.fiber-optic-cabling.index');
    });
    Route::get('/software-hardware', function () {
        return view('services.software-hardware.index');
    });
    Route::get('/software-hardware/custom-software-solutions', function () {
        return view('services.software-hardware.custom-software-solutions.index');
    });
    Route::get('/software-hardware/hardware-solutions', function () {
        return view('services.software-hardware.hardware-solutions.index');
    });
    Route::get('/web-cloud-solutions', function () {
        return view('services.web-cloud-solutions.index');
    });
    Route::get('/web-cloud-solutions/domains-web-hosting', function () {
        return view('services.web-cloud-solutions.domains-web-hosting.index');
    });
    Route::get('/web-cloud-solutions/cloud-hosting-solutions', function () {
        return view('services.web-cloud-solutions.cloud-hosting-solutions.index');
    });
    Route::get('/web-cloud-solutions/google-integrated-solutions', function () {
        return view('services.web-cloud-solutions.google-integrated-solutions.index');
    });
    Route::get('/smart-home-security-solutions', function () {
        return view('services.smart-home-security-solutions.index');
    });
    Route::get('/smart-home-security-solutions/cctv-installation', function () {
        return view('services.smart-home-security-solutions.cctv-installation.index');
    });
    Route::get('/smart-home-security-solutions/access-control', function () {
        return view('services.smart-home-security-solutions.access-control.index');
    });
    Route::get('/smart-home-security-solutions/home-automation', function () {
        return view('services.smart-home-security-solutions.home-automation.index');
    });
    Route::get('/ict-consultancy-training', function () {
        return view('services.ict-consultancy-training.index');
    });
    Route::get('/internet-services', function () {
        return view('services.internet-services.index');
    });
});

// Internet services
Route::get('/kemnet-home-wireless', function () {
    return view('kemnet-home-wireless.index');
});
Route::get('/kemnet-home-fiber', function () {
    return view('kemnet-home-fiber.index');
});
Route::get('/kemnet-business-internet', function () {
    return view('kemnet-business-internet.index');
});

// Other main pages
Route::get('/web-and-cloud-services', function () {
    return view('web-and-cloud-services.index');
});
Route::get('/kemnet-home-fiber-wireless', function () {
    return view('kemnet-home-fiber-wireless.index');
});

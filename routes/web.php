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

$pageAliases = [
    'career' => 'careers.index',
    'business-internet' => 'kemnet-business-internet.index',
    'business-fiber' => 'kemnet-business-internet.index',
    'business-fibre' => 'kemnet-business-internet.index',
    'kemnet-business-fiber' => 'kemnet-business-internet.index',
    'kemnet-business-fibre' => 'kemnet-business-internet.index',
    'web-and-cloud' => 'web-and-cloud-services.index',
    'weband-cloud' => 'web-and-cloud-services.index',
    'web-cloud' => 'web-and-cloud-services.index',
    'web-cloud-services' => 'web-and-cloud-services.index',
    'ict-consultancy-training' => 'services.ict-consultancy-training.index',
    'ai' => 'services.ict-consultancy-training.index',
    'ai-ict-consultancy-training' => 'services.ict-consultancy-training.index',
    'ai-and-ict-consultancy-training' => 'services.ict-consultancy-training.index',
];

foreach ($pageAliases as $uri => $view) {
    Route::get('/' . $uri, fn () => view($view));
}

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

$legacyServiceViews = [
    'our-services/domains-web-hosting' => 'services.web-cloud-solutions.domains-web-hosting.index',
    'our-services/ict-consultancy-training' => 'services.ict-consultancy-training.index',
    'our-services/infrastructure-networking' => 'services.infrastructure-networking.index',
    'our-services/infrastructure-networking/dark-fiber' => 'services.infrastructure-networking.dark-fiber.index',
    'our-services/fiber-optic-cabling' => 'services.fiber-optic-cabling.index',
    'our-services/internet-services' => 'services.internet-services.index',
    'our-services/smart-home-security-solutions' => 'services.smart-home-security-solutions.index',
    'our-services/smart-home-security-solutions/access-control' => 'services.smart-home-security-solutions.access-control.index',
    'our-services/smart-home-security-solutions/cctv-installation' => 'services.smart-home-security-solutions.cctv-installation.index',
    'our-services/smart-home-security-solutions/home-automation' => 'services.smart-home-security-solutions.home-automation.index',
    'our-services/smart-home-security-solutions/structured-cabling-cctv' => 'services.smart-home-security-solutions.cctv-installation.index',
    'our-services/software-hardware' => 'services.software-hardware.index',
    'our-services/software-hardware/custom-software-solutions' => 'services.software-hardware.custom-software-solutions.index',
    'our-services/software-hardware/hardware-solutions' => 'services.software-hardware.hardware-solutions.index',
    'our-services/web-cloud-solutions' => 'services.web-cloud-solutions.index',
    'our-services/web-cloud-solutions/cloud-hosting-solutions' => 'services.web-cloud-solutions.cloud-hosting-solutions.index',
    'our-services/web-cloud-solutions/domains-web-hosting' => 'services.web-cloud-solutions.domains-web-hosting.index',
    'our-services/web-cloud-solutions/google-integrated-solutions' => 'services.web-cloud-solutions.google-integrated-solutions.index',
    'our-services/localized-cloud-hosting' => 'services.web-cloud-solutions.cloud-hosting-solutions.index',
];

foreach ($legacyServiceViews as $uri => $view) {
    Route::get('/' . $uri, fn () => view($view));
}

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
Route::get('/shop', function () {
    return view('services.index');
});

Route::get('/kemnet.co.ke/{path?}', function (?string $path = '') {
    $path = trim((string) $path, '/');

    if ($path === '') {
        return view('index');
    }

    $viewPath = resource_path('views/' . $path . '/index.blade.php');

    if (file_exists($viewPath)) {
        return view()->file($viewPath);
    }

    abort(404);
})->where('path', '.*');

// Blog and content pages
Route::get('/feed', function () {
    return view('feed.index');
});
Route::get('/testimonial', function () {
    return view('testimonial.index');
});

// How-to guides
Route::get('/how-to-choose-a-domain-name', function () {
    return view('how-to-choose-a-domain-name.index');
});
Route::get('/how-to-optimize-your-wifi', function () {
    return view('how-to-optimize-your-wifi.index');
});
Route::get('/how-to-position-your-router', function () {
    return view('how-to-position-your-router.index');
});
Route::get('/how-to-stay-safe-online', function () {
    return view('how-to-stay-safe-online.index');
});

// Information pages
Route::get('/what-is-latency', function () {
    return view('what-is-latency.index');
});
Route::get('/what-is-web-hosting', function () {
    return view('what-is-web-hosting.index');
});
Route::get('/the-unstoppable-wave-of-internet-of-things', function () {
    return view('the-unstoppable-wave-of-internet-of-things.index');
});
Route::get('/understanding-redundancy-the-backbone-of-reliable-internet', function () {
    return view('understanding-redundancy-the-backbone-of-reliable-internet.index');
});

Route::get('/{path}', function (string $path) {
    $path = trim($path, '/');

    if ($path === '') {
        return view('index');
    }

    $viewPath = resource_path('views/' . $path . '/index.blade.php');

    if (file_exists($viewPath)) {
        return view()->file($viewPath);
    }

    abort(404);
})->where('path', '.*');

<?php

namespace App\Providers;

use Waterhole\Extend;
use Illuminate\View\Component;

class WaterholeServiceProvider extends Extend\ServiceProvider
{
    public function extend(): void
    {
        /*
        |-----------------------------------------------------------------------
        | Waterhole Extenders
        |-----------------------------------------------------------------------
        |
        | The main mechanism by which you'll hook into Waterhole is with
        | extenders. There are dozens more extenders like this covering all
        | parts of Waterhole's views and functionality, ready to hook into.
        |
        | Learn more: https://waterhole.dev/docs/extending
        |
        */

        Extend\Stylesheet::add(resource_path('css/waterhole/app.css'));

        Extend\DocumentHead::add('waterhole.head');

        Extend\Header::replace('title', 'waterhole.title');

        // Add the user Terms and conditions, and Disclaimer checkbox to the registration form.

        Extend\RegistrationForm::add(TermsAndDisclaimer::class);
    }
}

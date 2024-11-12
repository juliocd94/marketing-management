<?php

namespace App\Http\Middleware;

use App\Enums\Country;
use Illuminate\Http\Request;
use Inertia\Middleware;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that is loaded on the first page visit.
     *
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determine the current asset version.
     */
    public function version(Request $request): string|null
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @return array<string, mixed>
     */
    public function share(Request $request): array
    {
        $countries = collect(Country::cases())->map(fn($case) => [
            'label' => $case->name,
            'value' => $case->value,
        ]);

        return [
            ...parent::share($request),
            'auth' => [
                'user' => $request->user(),
            ],
            'countries' => $countries
        ];
    }
}

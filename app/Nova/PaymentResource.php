<?php

namespace App\Nova;

use App\Models\Employee;
use App\Models\Payment;
use App\Nova\Lenses\PaymentsPerEmployee;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;

class PaymentResource extends Resource
{
    public static $model = Payment::class;

    public static $title = 'id';

    public static $search = [
        'id'
    ];

    public function fields(Request $request): array
    {
        return [
            ID::make()->sortable(),

            Date::make('Payment Date')
                ->sortable()
                ->rules('required', 'date'),

            Number::make('Amount')
                ->sortable()
                ->rules('required', 'integer'),

            BelongsTo::make('Employee', 'employee', EmployeeResource::class),
        ];
    }

    public function cards(Request $request): array
    {
        return [];
    }

    public function filters(Request $request): array
    {
        return [];
    }

    public function lenses(Request $request): array
    {
        return [
            new PaymentsPerEmployee,
        ];
    }

    public function actions(Request $request): array
    {
        return [];
    }

    public static function uriKey()
    {
        return 'payment-resource';
    }
}

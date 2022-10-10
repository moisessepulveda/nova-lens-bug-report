<?php

namespace App\Nova;

use App\Models\Employee;
use App\Models\Payment;
use App\Nova\Lenses\EmployeesPaymentLens;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;

class EmployeeResource extends Resource
{
    public static $model = Employee::class;

    public static $title = 'name';

    public static $search = [
        'id', 'name', 'last_name'
    ];

    public function fields(Request $request): array
    {
        return [
            ID::make()->sortable(),

            Text::make('Name')
                ->sortable()
                ->rules('required'),

            Text::make('Last Name')
                ->sortable()
                ->rules('required'),

            HasMany::make('Payments', 'payments', PaymentResource::class),
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
            new EmployeesPaymentLens()
        ];
    }

    public function actions(Request $request): array
    {
        return [];
    }

    public static function uriKey()
    {
        return 'employee-resource';
    }
}

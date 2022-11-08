<?php

namespace App\Http\Livewire;

use Auth;
use App\Models\Booking;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};

final class Bookings extends PowerGridComponent
{
    use ActionButton;

    public string $primaryKey = 'bookings.booking_id';

    public string $sortField = 'bookings.booking_id';

    protected function getListeners()
    {
        return array_merge(parent::getListeners(), ['rowActionEvent', 'bulkActionEvent']);
    }

    /*
    |--------------------------------------------------------------------------
    | Events
    |--------------------------------------------------------------------------
    */
    public function rowActionEvent(array $data): void
    {
        $message = $data['id'];

        $this->dispatchBrowserEvent('showAlert', ['message' => $message]);
    }

    public function bulkActionEvent()
    {
        if (count($this->checkboxValues) == 0) {
            $this->dispatchBrowserEvent('showAlert', ['message' => 'You must select at least one item!']);

            return;
        }
    }

    /*
    |--------------------------------------------------------------------------
    |  Features Setup
    |--------------------------------------------------------------------------
    | Setup Table's general features
    |
    */
    public function setUp(): array
    {
        $this->showCheckBox('booking_id');

        return [
            Exportable::make('bookings_report')
                ->striped('A6ACCD')
                ->type(Exportable::TYPE_XLS, Exportable::TYPE_CSV),
            Header::make()
                ->showSearchInput()
                ->showToggleColumns(),
            Footer::make()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    /*
    |--------------------------------------------------------------------------
    |  Datasource
    |--------------------------------------------------------------------------
    | Provides data to your Table using a Model or Collection
    |
    */

    /**
     * PowerGrid datasource.
     *
     * @return Builder<\App\Models\Booking>
     */
    public function datasource(): Builder
    {
        return Booking::query()
            ->join('users', 'users.user_id', '=', 'bookings.user_id')
            ->join('packages', 'packages.package_id', '=', 'bookings.package_id')
            ->join('destinations', 'destinations.destination_id', '=', 'packages.destination_id')
            ->select('users.*', 'bookings.*', 'packages.*', 'destinations.*');
    }

    /*
    |--------------------------------------------------------------------------
    |  Relationship Search
    |--------------------------------------------------------------------------
    | Configure here relationships to be used by the Search and Table Filters.
    |
    */

    /**
     * Relationship search.
     *
     * @return array<string, array<int, string>>
     */
    public function relationSearch(): array
    {
        return [];
    }

    /*
    |--------------------------------------------------------------------------
    |  Add Column
    |--------------------------------------------------------------------------
    | Make Datasource fields available to be used as columns.
    | You can pass a closure to transform/modify the data.
    |
    | ❗ IMPORTANT: When using closures, you must escape any value coming from
    |    the database using the `e()` Laravel Helper function.
    |
    */
    public function addColumns(): PowerGridEloquent
    {
        return PowerGrid::eloquent()
            ->addColumn('email')
            ->addColumn('phone')
            ->addColumn('package_name')
            ->addColumn('destination_name')
            ->addColumn('status')

            ->addColumn('created_at_formatted', fn(Booking $model) => Carbon::parse($model->created_at)->format('d/m/Y H:i:s'));
    }

    /*
    |--------------------------------------------------------------------------
    |  Include Columns
    |--------------------------------------------------------------------------
    | Include the columns added columns, making them visible on the Table.
    | Each column can be configured with properties, filters, actions...
    |
    */

    /**
     * PowerGrid Columns.
     *
     * @return array<int, Column>
     */
    public function columns(): array
    {
        return [
            Column::make('EMAIL', 'email')
                ->sortable()
                ->searchable(),

            Column::make('PHONE', 'phone')
                ->sortable()
                ->searchable(),

            Column::make('PACKAGE', 'package_name')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::make('DESTINATION', 'destination_name')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::make('STATUS', 'status')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::make('CREATED AT', 'created_at_formatted', 'created_at')
                ->searchable()
                ->sortable()
                ->makeInputDatePicker(),
        ];
    }

    /*
    |--------------------------------------------------------------------------
    | Actions Method
    |--------------------------------------------------------------------------
    | Enable the method below only if the Routes below are defined in your app.
    |
    */

    /**
     * PowerGrid User Action Buttons.
     *
     * @return array<int, Button>
     */

    public function actions(): array
    {
        return [
            Button::make('destroy', 'Delete')
                ->class('btn btn-sm btn-danger')
                ->emit('rowActionEvent', ['id' => 'booking_id']),
        ];
    }

    /*
    |--------------------------------------------------------------------------
    | Actions Rules
    |--------------------------------------------------------------------------
    | Enable the method below to configure Rules for your Table and Action Buttons.
    |
    */

    /**
     * PowerGrid Package Action Rules.
     *
     * @return array<int, RuleActions>
     */

    public function actionRules(): array
    {
        return [
            //Disable button delete for customer,receptionist
            Rule::button('destroy')
                ->when(fn($role) => Auth::user()->role === 'customer' || Auth::user()->role === 'receptionist')
                ->disable(),
        ];
    }
}

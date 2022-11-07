<?php

namespace App\Http\Livewire;

use Auth;
use App\Models\Package;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};

final class Packages extends PowerGridComponent
{
    use ActionButton;

    public string $primaryKey = 'packages.package_id';

    public string $sortField = 'packages.package_id';

    /**
     * User name
     *
     * @var array<int, string> $name
     */
    public array $name;

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

    /*
    |--------------------------------------------------------------------------
    |  Features Setup
    |--------------------------------------------------------------------------
    | Setup Table's general features
    |
    */
    public function setUp(): array
    {
        $this->showCheckBox();

        return [
            Exportable::make('packages_report')
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
     * @return Builder<\App\Models\Package>
     */
    public function datasource(): Builder
    {
        return Package::query()
            ->join('destinations', 'destinations.destination_id', '=', 'packages.destination_id')
            ->select('packages.*', 'destinations.destination_name');
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
            ->addColumn('package_name')
            ->addColumn('package_type')

            /** Example of custom column using a closure **/
            ->addColumn('package_type_lower', function (Package $model) {
                return strtolower(e($model->package_type));
            })

            ->addColumn('amount')
            ->addColumn('image_url')
            ->addColumn('destination_name');
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
            Column::make('PACKAGE NAME', 'package_name')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::make('PACKAGE TYPE', 'package_type')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::make('AMOUNT', 'amount')->makeInputRange(),

            Column::make('DESTINATION', 'destination_name')
                ->sortable()
                ->searchable()
                ->makeInputText(),
        ];
    }

    public ?array $any = null;

    public function onUpdatedEditable(string $id, string $field, string $value):void
    {
        Package::query()->find($id)->update([
            $field => $value,
        ]);

    }

    /*
    |--------------------------------------------------------------------------
    | Actions Method
    |--------------------------------------------------------------------------
    | Enable the method below only if the Routes below are defined in your app.
    |
    */

    /**
     * PowerGrid Package Action Buttons.
     *
     * @return array<int, Button>
     */

    public function actions(): array
    {
        return [

            Button::make('destroy', 'Delete')
                ->class('btn btn-sm btn-danger')
                ->emit('rowActionEvent', ['id' => 'package_id']),
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
                ->when(fn($role) => Auth::user()->role === 'customere' || Auth::user()->role === 'receptionist')
                ->disable(),
        ];
    }
}

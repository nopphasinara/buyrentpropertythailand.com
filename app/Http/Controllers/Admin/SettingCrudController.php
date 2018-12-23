<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\SettingRequest as StoreRequest;
use App\Http\Requests\SettingRequest as UpdateRequest;

/**
 * Class SettingCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class SettingCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Setting');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/setting');
        $this->crud->setEntityNameStrings('setting', 'settings');
        // $this->crud->setActionsColumnPriority(10000);
        // // $this->crud->addClause('where', 'post_type', '=', 'post');
        // $this->crud->disableDetailsRow();
        // $this->crud->enableBulkActions();
        // $this->crud->addBulkDeleteButton();

        // \Alert::info('This is a blue bubble.');
        // \Alert::warning('This is a yellow/orange bubble.');
        // \Alert::error('This is a red bubble.');
        // \Alert::success('This is a green bubble.');
        // \Alert::success('<strong>Got it</strong><br>This is an HTML message.');

        // $this->crud->getActionMethod();
        // $this->crud->actionIs('create');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // add asterisk for fields that are required in SettingRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}

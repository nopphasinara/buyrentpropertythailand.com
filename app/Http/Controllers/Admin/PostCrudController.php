<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\PostRequest as StoreRequest;
use App\Http\Requests\PostRequest as UpdateRequest;

/**
 * Class PostCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class PostCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Post');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/post');
        $this->crud->setEntityNameStrings('post', 'posts');
        // $this->crud->addClause('where', 'post_type', '=', 'post');
        $this->crud->enableBulkActions();
        $this->crud->addBulkDeleteButton();
        $this->crud->disableDetailsRow();
        // $this->crud->disableResponsiveTable();
        $this->crud->setActionsColumnPriority(10000);

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

        // TODO: remove setFromDb() and manually define Fields and Columns
        // $this->crud->setFromDb();

        // 1-n relationship
        // $this->crud->addColumn([
        //   'name' => 'post_author', // the column that contains the ID of that connected entity;
        //   'label' => "Author", // Table column heading
        //   'type' => "select",
        //   'entity' => 'author', // the method that defines the relationship in your Model
        //   'attribute' => "user_nicename", // foreign key attribute that is shown to user
        //   'model' => "App\Models\Author", // foreign key model
        // ]);

        // add asterisk for fields that are required in PostRequest
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

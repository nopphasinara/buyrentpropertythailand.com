<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\ListingRequest as StoreRequest;
use App\Http\Requests\ListingRequest as UpdateRequest;

/**
 * Class ListingCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class ListingCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Listing');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/listing');
        $this->crud->setEntityNameStrings('listing', 'listings');
        $this->crud->setActionsColumnPriority(10000);
        // $this->crud->addClause('where', 'post_type', '=', 'post');
        $this->crud->disableDetailsRow();
        $this->crud->enableBulkActions();
        $this->crud->addBulkDeleteButton();

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

        $this->crud->addColumn([
          'name' => 'id',
          'type' => 'text',
          'label' => 'ID',
        ]);
        $this->crud->addColumn([
          'name' => 'title',
          'type' => 'text',
          'label' => 'Title',
        ]);
        $this->crud->addColumn([
          'name' => 'author_id',
          'type' => 'text',
          'label' => 'Author',
        ]);
        $this->crud->addColumn([
          'name' => 'featured',
          'type' => 'boolean',
          'label' => 'Featured',
        ]);
        $this->crud->addColumn([
          'name' => 'status',
          'type' => 'text',
          'label' => 'Status',
        ]);
        $this->crud->addColumn([
          'name' => 'created_at',
          'type' => 'date',
          'label' => 'Created at',
        ]);

        $this->crud->addField([
          'name' => 'title',
          'type' => 'text',
          'label' => 'title',
        ]);
        $this->crud->addField([
          'name' => 'slug',
          'type' => 'text',
          'label' => 'slug',
        ]);
        $this->crud->addField([
          'name' => 'description',
          'type' => 'textarea',
          'label' => 'description',
        ]);
        $this->crud->addField([
          'name' => 'content',
          'type' => 'wysiwyg',
          'label' => 'content',
        ]);
        $this->crud->addField([
          'name' => 'author_id',
          'type' => 'text',
          'label' => 'author_id',
        ]);
        $this->crud->addField([
          'name' => 'parent_id',
          'type' => 'text',
          'label' => 'parent_id',
        ]);
        $this->crud->addField([
          'name' => 'metas_separator',
          'type' => 'custom_html',
          'value' => '<h3>Options</h3>',
        ]);
        $this->crud->addField([
          'name' => 'featured',
          'type' => 'checkbox',
          'label' => 'Featured listing',
        ]);
        $this->crud->addField([
          'name' => 'status',
          'type' => 'select',
          'label' => 'Status',
        ]);
        $this->crud->addField([
          'name' => 'extras',
          'type' => 'text',
          'label' => 'extras',
        ]);
        $this->crud->addField([
          'name' => 'image',
          'type' => 'text',
          'label' => 'image',
        ]);

        // TODO: remove setFromDb() and manually define Fields and Columns
        // $this->crud->setFromDb();

        // add asterisk for fields that are required in ListingRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here

        // use $this->data['entry'] or $this->crud->entry
        $this->data['entry']->replicate();

        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here

        // use $this->data['entry'] or $this->crud->entry
        $this->data['entry']->replicate();

        return $redirect_location;
    }
}

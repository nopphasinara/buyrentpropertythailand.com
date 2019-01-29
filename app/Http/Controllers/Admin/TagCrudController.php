<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\TagRequest as StoreRequest;
use App\Http\Requests\TagRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class TagCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class TagCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Tag');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/tag');
        $this->crud->setEntityNameStrings('tag', 'tags');
        $this->crud->addClause('where', 'post_type', '=', 'property');

        // echo '<pre>'; print_r(get_class_methods(request())); echo '</pre>';
        // echo '<pre>'; print_r($this->crud->getActionMethod()); echo '</pre>';
        // echo '<pre>'; print_r($this->crud->actionIs('index')); echo '</pre>';
        // echo '<pre>'; print_r(get_class_methods($this->crud)); echo '</pre>';
        // echo '<pre>'; print_r(backpack_user()->can('edit '. request()->segment(2) .'')); echo '</pre>';
        // echo '<pre>'; print_r(get_class_methods(backpack_user())); echo '</pre>';

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        $this->crud->setColumns(['post_title', 'post_name']);
        $this->crud->addField([
          'name' => 'post_title',
          'type' => 'text',
          'label' => 'Title',
        ]);
        $this->crud->addField([
          'name' => 'post_name',
          'type' => 'text',
          'label' => 'URL Segment (slug)',
        ]);

        if ($this->crud->actionIs('edit')) {
          echo '<pre>'; print_r($this->crud->getCurrentEntry()->meta); echo '</pre>';
        }

        // add asterisk for fields that are required in TagRequest
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

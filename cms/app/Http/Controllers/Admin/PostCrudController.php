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
        $this->crud->addClause('posts');
        // $this->crud->addClause('where', 'posts', function($query) {
        //   $query->activePosts();
        // });

        $this->crud->enableBulkActions();
        $this->crud->addBulkDeleteButton();
        $this->crud->disableDetailsRow();
        $this->crud->disableAutoFocus();

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        $columns = [
          'ID' => [
            'name' => 'ID',
            'type' => 'text',
            'hide' => 'field',
            'options' => [
              'column' => [],
              'field' => [],
            ],
          ],
          'post_title' => [
            'name' => 'post_title',
            'type' => 'text',
            'hide' => '',
            'options' => [
              'column' => [],
              'field' => [],
            ],
          ],
          'post_name' => [
            'name' => 'post_name',
            'type' => 'text',
            'hide' => 'column',
            'options' => [
              'column' => [],
              'field' => [],
            ],
          ],
          'post_content' => [
            'name' => 'post_content',
            'type' => 'ckeditor',
            'hide' => 'column',
            'options' => [
              'column' => [],
              'field' => [],
            ],
          ],
          'post_excerpt' => [
            'name' => 'post_excerpt',
            'type' => 'textarea',
            'hide' => 'column',
            'options' => [
              'column' => [],
              'field' => [],
            ],
          ],
          'post_status' => [
            'name' => 'post_status',
            'type' => 'enum',
            'hide' => '',
            'options' => [
              'column' => [],
              'field' => [],
            ],
          ],
          'post_author' => [
            'name' => 'post_author',
            'type' => 'text',
            'hide' => '',
            'options' => [
              'column' => [],
              'field' => [],
            ],
          ],
          'post_date' => [
            'name' => 'post_date',
            'type' => 'text',
            'hide' => 'field',
            'options' => [
              'column' => [],
              'field' => [],
            ],
          ],
        ];

        foreach ($columns as $key => $item) {
          if ($item['hide'] != 'all' && $item['hide'] != 'column') {
            $label = '';
            if (isset($item['label']) && $item['label']) {
              $label = $item['label'];
            } else {
              $label = title_case(preg_replace("/[_\-]/i", " ", $item['name']));
            }
            $args = array_merge([
              'name' => $item['name'],
              'type' => $item['type'],
              'label' => $label,
            ], $item['options']['column']);
            $this->crud->addColumn($args);
          }

          if ($item['hide'] != 'all' && $item['hide'] != 'field') {
            $label = '';
            if (isset($item['label']) && $item['label']) {
              $label = $item['label'];
            } else {
              $label = title_case(preg_replace("/[_\-]/i", " ", $item['name']));
            }
            $args = array_merge([
              'name' => $item['name'],
              'type' => $item['type'],
              'label' => $label,
            ], $item['options']['field']);
            $this->crud->addField($args);
          }
        }

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

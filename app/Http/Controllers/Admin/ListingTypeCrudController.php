<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\ListingTypeRequest as StoreRequest;
use App\Http\Requests\ListingTypeRequest as UpdateRequest;

/**
 * Class ListingTypeCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class ListingTypeCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\ListingType');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/listing_type');
        $this->crud->setEntityNameStrings('listing type', 'listing types');

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
        // $this->crud->addColumn([
        //   'name' => 'thumbnail',
        //   'type' => 'image',
        //   'label' => 'Thumbnail',
        //   'prefix' => 'uploads/',
        //   'height' => '100px',
        //   'width' => '100px',
        // ]);
        $this->crud->addColumn([
          'name' => 'title',
          'type' => 'text',
          'label' => 'Title',
        ]);
        $this->crud->addColumn([
          'name' => 'web_visible',
          'type' => 'check',
          'label' => 'Web visible',
          // 'options' => [
          //   'yes' => 'YES',
          //   'no' => 'NO',
          // ],
          // 'allows_null' => false,
          // 'allows_multiple' => false,
        ]);

        $this->crud->addField([
          'name' => 'title',
          'type' => 'text',
          'label' => 'Title',
        ]);
        $this->crud->addField([
          'name' => 'slug',
          'type' => 'text',
          'label' => 'Slug',
        ]);
        $this->crud->addField([ // image
          'label' => 'Thumbnail',
          'name' => 'thumbnail',
          'type' => 'image',
          'upload' => true,
          'crop' => true, // set to true to allow cropping, false to disable
          'aspect_ratio' => 1, // ommit or set to 0 to allow any aspect ratio
          // 'disk' => 's3_bucket', // in case you need to show images from a different disk
          'prefix' => 'uploads/' // in case your db value is only the file name (no path), you can use this to prepend your path to the image src (in HTML), before it's shown to the user;
        ]);
        $this->crud->addField([
          'name' => 'web_visible',
          'type' => 'select_from_array',
          'label' => 'Web visible',
          'default' => 'yes',
          'options' => [
            'yes' => 'YES',
            'no' => 'NO',
          ],
          'allows_null' => false,
          'allows_multiple' => false,
        ]);


        // add asterisk for fields that are required in ListingTypeRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');

        $this->crud->disableDetailsRow();
        $this->crud->enableBulkActions();
        $this->crud->addBulkDeleteButton();
        $this->crud->setActionsColumnPriority(10000);
        $this->crud->enableAjaxTable();

        // $this->addCustomCrudFilters();
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

    public function addCustomCrudFilters()
    {
        $this->crud->addFilter([ // add a "simple" filter called Draft
          'type'  => 'simple',
          'name'  => 'checkbox',
          'label' => 'Simple',
        ],
        false, // the simple filter has no values, just the "Draft" label specified above
        function () { // if the filter is active (the GET parameter "draft" exits)
            $this->crud->addClause('where', 'checkbox', '1');
        });
        $this->crud->addFilter([ // dropdown filter
          'name' => 'select_from_array',
          'type' => 'dropdown',
          'label'=> 'Dropdown',
        ], ['one' => 'One', 'two' => 'Two', 'three' => 'Three'], function ($value) {
            // if the filter is active
            $this->crud->addClause('where', 'select_from_array', $value);
        });
        $this->crud->addFilter([ // text filter
          'type'  => 'text',
          'name'  => 'text',
          'label' => 'Text',
        ],
        false,
        function ($value) { // if the filter is active
            $this->crud->addClause('where', 'text', 'LIKE', "%$value%");
        });
        $this->crud->addFilter([
          'name'       => 'number',
          'type'       => 'range',
          'label'      => 'Range',
          'label_from' => 'min value',
          'label_to'   => 'max value',
        ],
        false,
        function ($value) { // if the filter is active
            $range = json_decode($value);
            if ($range->from && $range->to) {
                $this->crud->addClause('where', 'number', '>=', (float) $range->from);
                $this->crud->addClause('where', 'number', '<=', (float) $range->to);
            }
        });
        $this->crud->addFilter([ // date filter
          'type'  => 'date',
          'name'  => 'date',
          'label' => 'Date',
        ],
        false,
        function ($value) { // if the filter is active, apply these constraints
            $this->crud->addClause('where', 'date', '=', $value);
        });
        $this->crud->addFilter([ // daterange filter
           'type' => 'date_range',
           'name' => 'date_range',
           'label'=> 'Date range',
           // 'date_range_options' => [
                 // 'format' => 'YYYY/MM/DD',
                 // 'locale' => ['format' => 'YYYY/MM/DD'],
                 // 'showDropdowns' => true,
                 // 'showWeekNumbers' => true
            // ]
         ],
         false,
         function ($value) { // if the filter is active, apply these constraints
             $dates = json_decode($value);
             $this->crud->addClause('where', 'date', '>=', $dates->from);
             $this->crud->addClause('where', 'date', '<=', $dates->to);
         });
        $this->crud->addFilter([ // select2 filter
          'name' => 'select2',
          'type' => 'select2',
          'label'=> 'Select2',
        ], function () {
            return \Backpack\NewsCRUD\app\Models\Category::all()->keyBy('id')->pluck('name', 'id')->toArray();
        }, function ($value) { // if the filter is active
            $this->crud->addClause('where', 'select2', $value);
        });
        $this->crud->addFilter([ // select2_multiple filter
          'name' => 'select2_multiple',
          'type' => 'select2_multiple',
          'label'=> 'Select2 multiple',
        ], function () {
            return \Backpack\NewsCRUD\app\Models\Category::all()->keyBy('id')->pluck('name', 'id')->toArray();
        }, function ($values) { // if the filter is active
            foreach (json_decode($values) as $key => $value) {
                $this->crud->addClause('orWhere', 'select2', $value);
            }
        });
        $this->crud->addFilter([ // select2_ajax filter
          'name'        => 'select2_from_ajax',
          'type'        => 'select2_ajax',
          'label'       => 'Select2 Ajax',
          'placeholder' => 'Pick an article',
        ],
        url('api/article-search'), // the ajax route
        function ($value) { // if the filter is active
            $this->crud->addClause('where', 'select2_from_ajax', $value);
        });
    }
}

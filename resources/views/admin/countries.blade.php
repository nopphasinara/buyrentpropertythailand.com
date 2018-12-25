@extends('layout.main')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('main')

    <div class="container">

        <div id="wrapper">
            @include('admin.sidebar_menu')

            <div id="page-wrapper">
                @if( ! empty($title))
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header"> {{ $title }}  </h1>
                        </div> <!-- /.col-lg-12 -->
                    </div> <!-- /.row -->
                @endif
                @include('admin.flash_msg')

                <div class="row">
                    <div class="col-xs-12">
                        <table class="table table-bordered table-striped" id="jDataTable">
                            <thead>
                            <tr>
                                <th>@lang('app.country_name')</th>
                                <th>@lang('app.country_code')</th>
                                <th>@lang('app.actions')</th>
                            </tr>
                            </thead>

                            @foreach($countries as $country)

                                <tr>
                                    <td>{!! $country->country_name !!}</td>
                                    <td>{!! $country->country_code !!}</td>
                                    <td>
                                      <a href="{{route('edit_country', $country->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i> </a>
                                      <a href="javascript:;" data-id="{{$country->id}}" class="btn btn-danger deleteCountry"><i class="fa fa-trash"></i> </a>
                                    </td>
                                </tr>

                            @endforeach

                            {{-- @foreach($countries as $country)
                                <tr>
                                    <td>{!! $country->country_name !!}</td>
                                    <td>{!! $country->country_code !!}</td>
                                    <td>
                                        <a href="{{route('edit_country', $country->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i> </a>
                                        <a href="javascript:;" data-id="{{$country->id}}" class="btn btn-danger deleteCountry"><i class="fa fa-trash"></i> </a>
                                    </td>
                                </tr>
                            @endforeach --}}

                        </table>

                    </div>
                </div>
            </div>   <!-- /#page-wrapper -->

        </div>   <!-- /#wrapper -->


    </div> <!-- /#container -->
@endsection


@section('page-js')
    <script>
        $(document).ready(function() {
            $('body').on('click', '.deleteCountry', function (e) {
                if (!confirm("Are you sure? its can't be undone")) {
                    e.preventDefault();
                    return false;
                }
                var selector = $(this);
                var data_id = $(this).data('id');
                $.ajax({
                    type: 'POST',
                    url: '{{ route('delete_country') }}',
                    data: {id: data_id, _token: '{{ csrf_token() }}'},
                    success: function (data) {
                        if (data.success == 1) {
                            selector.closest('tr').hide('slow');
                            toastr.success(data.msg, '@lang('app.success')', toastr_options);
                        }
                    }
                });
            });
        });
    </script>
@endsection

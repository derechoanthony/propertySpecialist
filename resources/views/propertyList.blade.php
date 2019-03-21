@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table id="propertyList" class="table table-striped table-bordered nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>Property Type</th>
                                <th>Offer Type</th>
                                <th>Sub Type</th>
                                <th>Title</th>
                                <th>Province</th>
                                <th>City</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $value)
                                <tr>
                                    <td>{{ $value['slct_propertyType'] }}</td>
                                    <td>{{ $value['slct_offerType'] }}</td>
                                    <td>{{ $value['slct_propertySubTypeHouse'] }}</td>
                                    <td>{{ $value['txt_title'] }}</td>
                                    <td>{{ $value['txt_province'] }}</td>
                                    <td>{{ $value['txt_city'] }}</td>
                                    <td>
                                        <a href="{{ url('/preview/'.$value['id'].'/property') }}" class="btn btn-sm btn-success">View</a>
                                        <a href="{{ url('/updateproperty/'.$value['id'].'/property') }}" class="btn btn-sm btn-warning">Edit</a>
                                        <a href="{{ url('/delete/'.$value['id'].'/property') }}" class="btn btn-sm btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
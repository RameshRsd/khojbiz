@extends('layouts.front')
@section('content')

    <!--------------- Advert Control -------------->
    <div class="content-wrapp">
        <div class="row">
            <div class="col-lg-12">
                <div class="content-covered package-details">
                    <div class="row">
                        @foreach($packages as $class=>$package)
                            <div class="col-lg-3">
                                <div class="listing_plan listing_plan{{++$class}}" style="background-color: lightblue;">
                                    <div class="content-header">
                                        <h5 class="alphabate-heading">{{$package->name}}</h5>
                                    </div>
                                    <table class="table-bordered table-striped" style="width:100%;">
                                        <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php
                                            $features = $package->features;
                                        @endphp
                                        @foreach($features as $key=>$feature)
                                            <tr>
                                                <td>{{++$key}}</td>
                                                <td>{{$feature->details}}</td>
                                                <td>
                                                    @if($feature->open=='Yes')
                                                        <i class="fa fa-check-circle" style="color: green;"></i>
                                                    @else
                                                        <i class="fa fa-ban" style="color:red;"></i>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tr>
                                            <td colspan="2">Price</td>
                                            <td>{{$package->price}}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3"><a href="{{url('register?package_id=').$package->id}}" class="btn btn-primary btn-sm">Let's Start</a></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--------------- Advert Control -------------->


@endsection
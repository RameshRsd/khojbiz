@extends('frontend.layouts.master')
@section('content')
    <link rel="stylesheet"  href="{{url('public/frontend/assets/css/product.css')}}">
    <!-- Main Container -->
    <main id="main-container">
        <div class="content alfa_li_dd">
            <div class="row">
                <div class="card">
                    <div class="container-fliud">
                        <div class="wrapper row">
                            <div class="preview col-md-5">

                                <div class="preview-pic tab-content">
                                    <div class="tab-pane active" id="pic-1"><img src="http://placekitten.com/400/252" /></div>
                                    <div class="tab-pane" id="pic-2"><img src="http://placekitten.com/400/252" /></div>
                                    <div class="tab-pane" id="pic-3"><img src="http://placekitten.com/400/252" /></div>
                                    <div class="tab-pane" id="pic-4"><img src="http://placekitten.com/400/252" /></div>
                                    <div class="tab-pane" id="pic-5"><img src="http://placekitten.com/400/252" /></div>
                                </div>
                                <ul class="preview-thumbnail nav nav-tabs">
                                    <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
                                    <li><a data-target="#pic-2" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
                                    <li><a data-target="#pic-3" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
                                    <li><a data-target="#pic-4" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
                                    <li><a data-target="#pic-5" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
                                </ul>

                            </div>
                            <div class="details col-md-4">
                                <h3 class="product-title">Suppliers Name </h3>
                                <div class="rating">
                                    <div class="stars">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <span class="review-no">41 reviews</span>
                                </div>
                                <p class="product-description">Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.</p>
                                <h4 class="price">current price: <span>$180</span></h4>
                                <p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
                                <h5 class="sizes">sizes:
                                    <span class="size" data-toggle="tooltip" title="small">s</span>
                                    <span class="size" data-toggle="tooltip" title="medium">m</span>
                                    <span class="size" data-toggle="tooltip" title="large">l</span>
                                    <span class="size" data-toggle="tooltip" title="xtra large">xl</span>
                                </h5>
                                <h5 class="colors">colors:
                                    <span class="color orange not-available" data-toggle="tooltip" title="Not In store"></span>
                                    <span class="color green"></span>
                                    <span class="color blue"></span>
                                </h5>
                                <div class="action">
                                    <button class="add-to-cart btn btn-default" type="button">add to cart</button>
                                    <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
                                </div>
                            </div>
                            <div class="details col-md-2">
                                <p class="product-description">SHARE IT:
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a></p>
                                <button type="button" class="btn btn-sm btn-primary push" data-toggle="modal" data-target="#modal-block-popin">Order By Phone</button>
                                <h4 class="price">current price: <span>$180</span></h4>
                                <p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
                                <h5 class="sizes">sizes:
                                    <span class="size" data-toggle="tooltip" title="small">s</span>
                                    <span class="size" data-toggle="tooltip" title="medium">m</span>
                                    <span class="size" data-toggle="tooltip" title="large">l</span>
                                    <span class="size" data-toggle="tooltip" title="xtra large">xl</span>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pop In Block Modal -->
            <div class="modal fade" id="modal-block-popin" tabindex="-1" role="dialog" aria-labelledby="modal-block-popin" aria-hidden="true">
                <div class="modal-dialog modal-dialog-popin" role="document">
                    <div class="modal-content">
                        <div class="block block-themed block-transparent mb-0">
                            <div class="block-header bg-primary-dark">
                                <h3 class="block-title">Order by Call - Your information (We will call you back shortly)</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                        <i class="fa fa-fw fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content font-size-sm">
                                <form action="">
                                    <div class="col">
                                    <div class="form-group">
                                        <div class="input-group form-group">
                                            <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        Name
                                                    </span>
                                            </div>
                                            <input type="text" class="form-control" id="example-group1-input1" name="example-group1-input1">
                                        </div>
                                        <div class="input-group form-group">
                                            <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        Email*
                                                    </span>
                                            </div>
                                            <input type="text" class="form-control" id="example-group1-input1" name="example-group1-input1">
                                        </div>
                                        <div class="input-group form-group">
                                            <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        Phone*
                                                    </span>
                                            </div>
                                            <input type="text" class="form-control" id="example-group1-input1" name="example-group1-input1">
                                        </div>
                                        <div class="input-group form-group">
                                            <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                       Note
                                                    </span>
                                            </div>
                                            <input type="text" class="form-control" id="example-group1-input1" name="example-group1-input1">
                                        </div>
                                        <div class="input-group form-group">
                                            <button type="submit" class="btn btn-sm btn-primary" data-dismiss="modal"><i class="fa fa-check mr-1"></i>Submit</button>
                                        </div>
                                    </div>
                                    </div>
                                </form>
                            </div>
                            <div class="block-content block-content-full text-right border-top">
                                <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Pop In Block Modal -->
        </div>
    </main>
    <!-- END Main Container -->

    @endsection
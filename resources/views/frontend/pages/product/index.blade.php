@extends('frontend.layouts.master')
@section('content')
    <link rel="stylesheet"  href="{{url('public/frontend/assets/css/product.css')}}">
    <!-- Main Container -->
    <main id="main-container">
        <div class="content sup_kb_pro_details">
            <div class="row">
                <div class="col-md-8">
                   <div class="copany_info_kb_de">
                       <div class="row">
                           <div class="col-md-3">
                               <div class="company_name">
                                   <div class="view-details-search-head">Company Name</div>
                               </div>
                           </div>
                           <div class="col-md-9">
                               <div class="company_name_kb">
                                   <div class="view-details-search-matter">{{$products->product_name}}</div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="copany_info_kb_de">
                       <div class="row">
                           <div class="col-md-3">
                               <div class="company_name">
                                   <div class="view-details-search-head">Contact Person</div>
                               </div>
                           </div>
                           <div class="col-md-9">
                               <div class="company_name_kb">
                                   <div class="view-details-search-matter">{{$products->contact_person}}</div>
                               </div>
                           </div>
                       </div>
                   </div>
                    <div class="copany_info_kb_de">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="company_name">
                                    <div class="view-details-search-head">Contact Number</div>
                                    <div class="view-details-search-head">E-mail</div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="company_name_kb">
                                    <div class="view-details-search-matter">{{$products->contact_no}}</div>
                                    @if($products->email == 0)
                                    <div class="view-details-search-matter">contact@khojbiz.com</div>
                                    @else
                                    <div class="view-details-search-matter">{{$products->email}}</div>
                                        @endif
                                </div>
                            </div>
                        </div>
                    </div>

                   <div class="copany_info_kb_de">
                       <div class="row">
                           <div class="col-md-3">
                               <div class="company_name">
                                   <div class="view-details-search-head">Address</div>
                               </div>
                           </div>
                           <div class="col-md-9">
                               <div class="company_name_kb">
                                   <div class="view-details-search-matter">{{$products->address}} </div>
                               </div>
                           </div>
                       </div>
                   </div>

                    <div class="copany_info_kb_de">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="company_name">
                                    <div class="view-details-search-head">Website</div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="company_name_kb">
                                    @if($products->website == 0)
                                    <div class="view-details-search-matter">NA</div>
                                    @else
                                    <div class="view-details-search-matter">{{$products->website}}</div>
                                        @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="copany_info_kb_de">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="company_name">
                                    <div class="view-details-search-head">Details</div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="company_name_kb">
                                    <div class="view-details-search-matter">
                                       {!! $products->product_details !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="copany_info_kb_de">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="company_name">
                                    <div class="view-details-search-head">Our Product</div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="company_name_kb">
                                    <div class="view-details-search-matter">
                                        <div class="row">
                                            @foreach($products->suppliers_product as $products)
                                                <div class="col-6">
                                                    <li><i class="fa fa-angle-right"></i> {{$products->category->name}} </li>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">
                                <i class="fa fa-briefcase text-muted mr-1"></i> Top Products
                            </h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            @foreach($top_product as $product)
                            <div class="media d-flex align-items-center push">
                                <div class="media-body">
                                    <div class="font-w600"><a style="color: #0189cc!important;" href="{{url('companyinfo').'/'.$ProductOverView = $product->slug}}">{{$product->product_name}}</a></div>
                                    <div class="font-size-sm">{{$product->address}}</div>
                                    <div class="font-size-sm">
                                        @foreach($product->top_product as $produt)
                                        <a href="{{url('search_product?cat=').$produt->category->slug}}" class="badge badge-primary" style="color: #fff!important;">{{$produt->category->name}}</a>
                                        @endforeach
                                    </div>

                                </div>
                            </div>
                            @endforeach
                            <div class="text-center push">
                                <button type="button" class="btn btn-sm btn-light"><a href="{{url('search_product?')}}">View More..</a></button>
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
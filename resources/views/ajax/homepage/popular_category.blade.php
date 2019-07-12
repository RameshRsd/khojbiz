<div class="row">
    <div class="col-lg-12">
        <div class="content-covered">
            <div class="content-header">
                <h5 class="alphabate-heading">Popular Categories<hr></h5>
            </div>
            <div class="content-main">
                <div class="row">
                    @foreach($category as $cat_value)
                        <div class="col-lg-4" style="margin-bottom: 15px;">
                            <a class="popular-cat-text alphabate" href="{{url('search?cat=').$cat_value->slug}}"><i class="fa fa-check-circle"></i>{{str_limit($cat_value->name,42)}} ({{count($cat_value->client_cat)}})</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

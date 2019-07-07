<div class="row">
    <div class="col-lg-12">
        <div class="content-covered">
            <div class="content-header">
                <h5 class="alphabate-heading">Popular Categories<hr></h5>
            </div>
            <div class="content-main">
                <div class="row">
                    @foreach($category as $cat_value)
                        <div class="col-lg-3">
                            <a class="popular-cat-text" href="{{url('search?cat=').$cat_value->slug}}"><small>{{str_limit($cat_value->name,50)}} ({{count($cat_value->client_cat)}})</small></a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<div class="single-event">
    <div class="head overlay">
        <img src="{!! $model->present()->thumbSrc() !!}" alt="#">
        <a href="{{ asset('uploads/manuals').'/'.$model->document }}" target="_blank" class="btn"><i class="fa fa-search"></i></a>
    </div>
    <div class="event-content">
        <h4 class="name"><a href="#">{!! $model->name !!}</a></h4>
        <p>{!! $model->body !!}</p>
    </div>
</div>

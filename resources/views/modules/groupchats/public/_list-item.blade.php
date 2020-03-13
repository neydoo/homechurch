<div class="single-event">
    <div class="head overlay">
        <img src="{!! $model->present()->thumbSrc() !!}" alt="#">
        <a href="#" class="btn"><i class="fa fa-search"></i></a>
    </div>
    <div class="event-content">
        <div class="meta"> 
            <span><i class="fa fa-calendar"></i>{!! $model->start_date !!}</span>
            <span><i class="fa fa-clock-o"></i>{!! $model->end_date !!}</span>
        </div>
        <h4 class="name"><a href="#">{!! $model->title !!}</a></h4>
        <p>{!! $model->body !!}</p>
    </div>
</div>

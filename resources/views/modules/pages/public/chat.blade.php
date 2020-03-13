@extends('pages::public.master')
@section('page')
    @include('pages::public._page-banner-section')
    <section class="testimonials no-bg overlay section">
        <div class="container">
            <div class="row">
                <div class="col-12" id="app">
                    {{--  @include('pages::public._page-content-body')  --}}
                    <groups :initial-groups="{{ current_user()->groups }}" :user="{{ current_user() }}"></groups>
                </div>
            </div>
        </div>
    </section>
@stop
@section('js')
    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
@endsection
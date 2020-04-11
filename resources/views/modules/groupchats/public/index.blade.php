@extends('pages::public.master')
@section('page')
    @include('pages::public._page-banner-section')
    <section class="events archives section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12" id="app">
                    @include('pages::public._page-content-body')
                    <groups :initial-groups="{{ $groups }}" :user="{{ current_user() }}" :initial-group-members="{{ $group_members }}" :is-admin="false"></groups>
                </div>
            </div>
        </div>
    </section>
@stop
@section('js')
<script src="{{asset('js/app.js')}}" type="text/javascript"></script>
@endsection
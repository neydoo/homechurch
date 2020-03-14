@extends('pages::public.master')
@section('page')
    @include('pages::public._page-banner-section')
    <section class="events archives section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @include('pages::public._page-content-body')
                </div>
            </div>
        </div>
    </section>
@stop
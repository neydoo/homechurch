@extends('pages::public.master')
@section('page')
    @include('pages::public._page-banner-section')
    <section class="events archives section">
        <div class="container">
            {{-- <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2><span>Announcements</span></h2>
                        <p></p>
                    </div>
                </div>
            </div> --}}
            <div class="row">
                <div class="col-12">
                    @include('pages::public._page-content-body')
                    @include('announcements::public._list')
                </div>
            </div>
        </div>
    </section>
@stop
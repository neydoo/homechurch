@extends('core::public.account-master')
@section('page')
    <section class="events archives section">
        <div class="container">
            <div class="row">
                {{--  <div class="col-12">
                    @include('pages::public._page-content-body')
                </div>  --}}
                @if($manuals = Manuals::allBy('status', 1))
                <div class="col-lg-6 col-md-6 col-sm-6 col-12 mb-2 mt-4">
                    <div class="inforide">
                        <a href="{{ route('manuals.index')}}">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-4 col-4 rideone">
                                <img src="https://vignette.wikia.nocookie.net/nationstates/images/2/29/WS_Logo.png/revision/latest?cb=20080507063620">
                            </div>
                            <div class="col-lg-9 col-md-8 col-sm-8 col-8 fontsty">
                                <h4>Manuals</h4>
                                <h2>{{ count($manuals) }}</h2>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
                @endif
                @if($manuals = Announcements::allBy('status', 1))
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 mb-2 mt-4">
                        <div class="inforide">
                            <a href="{{ url('media/announcements')}}">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-4 col-4 ridetwo">
                                    <img src="https://cdn.clipart.email/fc607e4ca04651865e9f2dc671814901_announcement-clipart-team-announcement-team-transparent-free-for-_640-640.jpeg">
                                </div>
                                <div class="col-lg-9 col-md-8 col-sm-8 col-8 fontsty">
                                    <h4>Announcement</h4>
                                    <h2>{{ count($manuals) }}</h2>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                @endif
                @if(!empty(current_user()->groupchats))
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 mb-2 mt-4">
                        <div class="inforide">
                            <a href="{{ route('groupchats')}}">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-4 col-4 ridethree">
                                    <img src="https://cdn.images.express.co.uk/img/dynamic/59/590x/whatsapp-archive-how-to-find-archived-whatsapp-chats-where-are-archived-whatsapp-messages-1166226.jpg?r=1581088465552">
                                </div>
                                <div class="col-lg-9 col-md-8 col-sm-8 col-8 fontsty">
                                    <h4>Chat</h4>
                                    <h2>{{ count(current_user()->groupchats) }}</h2>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                @endif
                @if(!empty(current_user()->homechurches))
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 mb-2 mt-4">
                        <div class="inforide">
                            <a href="{{ route('groupchats')}}">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-4 col-4 ridethree">
                                    <img src="https://cdn.images.express.co.uk/img/dynamic/59/590x/whatsapp-archive-how-to-find-archived-whatsapp-chats-where-are-archived-whatsapp-messages-1166226.jpg?r=1581088465552">
                                </div>
                                <div class="col-lg-9 col-md-8 col-sm-8 col-8 fontsty">
                                    <h4>Home Church</h4>
                                    <h2>{{ count(current_user()->homechurches) }}</h2>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
@stop
@section('css')
    <style>
    .inforide {
        box-shadow: 1px 2px 8px 0px #f1f1f1;
        background-color: white;
        border-radius: 8px;
        height: 125px;
    }

    .rideone img {
        width: 70%;
    }

    .ridetwo img {
        width: 60%;
    }

    .ridethree img {
        width: 50%;
    }

    .rideone {
        background-color: #6CC785;
        padding-top: 25px;
        border-radius: 8px 0px 0px 8px;
        text-align: center;
        height: 125px;
        margin-left: 15px;
    }

    .ridetwo {
        background-color: #9A75FE;
        padding-top: 30px;
        border-radius: 8px 0px 0px 8px;
        text-align: center;
        height: 125px;
        margin-left: 15px;
    }

    .ridethree {
        background-color: #4EBCE5;
        padding-top: 35px;
        border-radius: 8px 0px 0px 8px;
        text-align: center;
        height: 125px;
        margin-left: 15px;
    }

    .fontsty {
        margin-right: -15px;
    }

    .fontsty h2{
        color: #6E6E6E;
        font-size: 35px;
        margin-top: 15px;
        text-align: right;
        margin-right: 30px;
    }

    .fontsty h4{
        color: #6E6E6E;
        font-size: 25px;
        margin-top: 20px;
        text-align: right;
        margin-right: 30px;
    }

    </style>
@endsection
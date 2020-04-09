@extends('pages::public.master')
@section('page')
    @include('pages::public._page-banner-section')
    <section class="events archives section">
        <div class="container">
            <div class="row">
                <div class="col-12" id="app">
                    @include('pages::public._page-content-body')
                    @if(count(current_user()->homechurches) > 0)
                        <a href="https://www.google.com/maps/place/{{ current_user()->homechurches[0]['address'] }}" target="_blank">{{ current_user()['homechurches'][0]['address'] }}</a>
                    @else
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Country </label>
                                    @if($countries = Countries::getAll())
                                        <select name="country_id" id="country_id" class="form-control required">
                                            <option value=""> -- Select Country--</option>
                                            @foreach ($countries as $country)
                                            <option value="{{ $country->id }}">{{ $country->name }} </option>
                                            @endforeach
                                        </select>
                                    @endif
                                </div>
                            </div>
                            <div class="col">{!! form_row($register_form->state_id) !!}</div>
                            <div class="col">{!! form_row($register_form->church_id) !!}</div>
                            <div class="col">{!! form_row($register_form->homechurch_id) !!}</div>
                        </div>
                    
                    @endif
                    {{-- <div class="col-sm-6">
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
@stop
@section('js')
    <script>
        $(function() {
            getSelectOnChange($("#country_id"),'/api/country/states/', $('#state_id').closest('div'),$('#state_id'),'State','states');
            getSelectOnChange($("#state_id"),'/api/state/churches/', $('#church_id').closest('div'),$('#church_id'),'Church','churches');
            getSelectOnChange($("#church_id"),'/api/church/homechurches/', $('#homechurch_id').closest('div'),$('#homechurch_id'),'HomeChurch','homechurches');
        });
    </script>
@endsection
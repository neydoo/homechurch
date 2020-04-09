@if($test_block = Blocks::bySlug('homechurches'))
    <section class="events archives section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>{!! $test_block->present()->styledTitle !!}</h2>
                        <p>{!! $test_block->present()->content !!}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    @if($announcements = Homechurches::latest(5))
                        @foreach ($announcements as $model)
                            @include('homechurches::public._list-item')
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>
@endif
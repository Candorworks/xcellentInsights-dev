<div class="col-lg-8">
    @if ($count == 0)
        @include('web.include.dataNotFound')
    @else
        <div class="infinite-scroll">
            @foreach ($reports as $report)
                <div class="individual-report-container p-3 mb-4">
                    <a href="{{ route('report_detail', ['report_slug' => $report['slug']]) }}">
                        <h5>{{ $report->title }}</h5>
                        <p>{!! substr($report->meta_desc, 0, 180) !!}</p>
                        <div class="report-detail-bar py-2 px-3">
                            <div class="row">
                                <div class="col-lg-4 ">
                                    <h6 class="m-0">Report ID: {{ $report->unique_id }}</h6>
                                </div>
                                <div class="col-lg-4">
                                    <h6 class="m-0">Publish date:
                                        {{ date('M Y', strtotime($result->publish)) }}
                                    </h6>
                                </div>
                                <div class="col-lg-2">
                                    <h6 class="m-0">Pages: {{ $report->pages }}</h6>
                                </div>
                                <div class="col-lg-2">
                                    <h6 class="m-0">$ {{ $report->single_price }}</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    @endif
</div>

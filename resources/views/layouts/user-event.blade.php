<div class="row">
    @foreach ($DATA_EVENT as $event)
    <div class="col-12 col-md-6">
        <div class="card card-course">
            <div class="card-body p-3">
                <div class="header d-flex flex-row">
                    <h6 class="title-event text-gray-700">
                        {{$event['title']}}
                    </h6>
                </div>
                <div class="details border border-bottom-0 border-left-0 border-right-0 mt-1 d-flex flex-row align-items-center py-2">
                    <div class="px-2 py-0 text-yellow-500 rounded learning d-flex flex-row align-items-center border-yellow-500 border">
                        {{$event['kategory']}}
                    </div>

                </div>
            </div>
        </div>

    </div>
    @endforeach
</div>
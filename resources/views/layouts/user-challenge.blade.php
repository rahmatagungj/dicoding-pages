<div class="row">
    @foreach ($DATA_CHALLENGE as $challenge)
    <div class="col-12 col-md-6">
        <div class="card card-course">
            <div class="card-body p-3">
                <div class="header">
                    <img class="lozad rounded" data-src="/images/{{$challenge['image']}}" alt="{{$challenge['title']}}" class="rounded-circle" loading="lazy" data-placeholder-background="white">

                    <h6 class="title-event text-gray-700 font-weight-bold mt-2 challenge-title">
                        {{$challenge['title']}}
                    </h6>
                    <p class="small mb-0">Diselenggarakan oleh: {{$challenge['provider']}}</p>
                    <div class="trophy my-1 mb-2">

                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.33333 10.6667L4 2H12L10.6667 10.6667L8 11.3333L5.33333 10.6667Z" fill="#FBBF24" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.51055 1.5472C3.63673 1.4108 3.81411 1.33325 3.99992 1.33325H11.9999C12.1857 1.33325 12.3631 1.4108 12.4893 1.5472C12.6155 1.68359 12.679 1.86646 12.6646 2.05171L12.6167 2.66659H13.9999C14.3681 2.66659 14.6666 2.96506 14.6666 3.33325V6.66659C14.6666 6.88949 14.5552 7.09764 14.3697 7.22129L12.3697 8.55462C12.3009 8.60052 12.2266 8.63193 12.1505 8.64955L12.1289 8.92554C11.9937 10.6608 10.5462 11.9999 8.80569 11.9999H8.66659V13.3333H11.9999V14.6666H3.99992V13.3333H7.33325V11.9999H7.19415C5.45364 11.9999 4.0061 10.6608 3.87089 8.92554L3.84938 8.64955C3.77326 8.63193 3.69897 8.60052 3.63012 8.55462L1.63012 7.22129C1.44465 7.09764 1.33325 6.88949 1.33325 6.66659V3.33325C1.33325 2.96506 1.63173 2.66659 1.99992 2.66659H3.38318L3.33527 2.05171C3.32083 1.86646 3.38436 1.68359 3.51055 1.5472ZM8.80569 10.6666C9.85 10.6666 10.7185 9.86311 10.7996 8.82196L11.2793 2.66659H4.72055L5.20019 8.82196C5.28132 9.86311 6.14984 10.6666 7.19415 10.6666H8.80569ZM12.278 7.01333L12.5128 3.99992H13.3333V6.3098L12.278 7.01333ZM3.48708 3.99992L3.72189 7.01333L2.66659 6.3098V3.99992H3.48708Z" fill="#F59E0B" />
                        </svg>
                        <label class="small align-items-center text-gray-700">Winner</label>
                    </div>
                </div>
                <div class="details border border-bottom-0 border-left-0 border-right-0 mt-1 d-flex flex-row align-items-center pt-2  justify-content-end">
                    <div class="py-0 d-flex flex-row align-items-center cursor-pointer">
                        <label class="text-blue-500 challenge-details cursor-pointer font-size-14 mb-0">Details</label>
                        <svg width="12" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-blue-500 ml-2 mb-0 mt-1">
                            <path d="M7.66944 2.276L1.93144 8.014L0.98877 7.07133L6.7261 1.33333H1.66944V0H9.00277V7.33333H7.66944V2.276Z" fill="currentColor"/>
                        </svg>

                    </div>

                </div>
            </div>
        </div>

    </div>
    @endforeach
</div>
<div class="row">
    @foreach ($DATA_COURSE as $course)
    <div class="col-6">
        <div class="card card-course">
            <div class="card-body p-3">
                <div class="header d-flex flex-row">
                    <img class="rounded" src="/images/{{$course['image']}}" alt="pemrograman c" class="rounded-circle">

                    <h6 class="title-course ml-2 text-gray-700 font-weight-bold">
                        {{$course['title']}}
                    </h6>
                </div>
                <div class="details border border-bottom-0 border-left-0 border-right-0 mt-3 d-flex flex-row align-items-center py-2">
                    <div class="learning d-flex flex-row align-items-center text-gray-700">


                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-2 text-gray-700">
                            <g id="clock">
                                <path id="Vector" d="M8.00004 14.6654C11.6819 14.6654 14.6667 11.6806 14.6667 7.9987C14.6667 4.3168 11.6819 1.33203 8.00004 1.33203C4.31814 1.33203 1.33337 4.3168 1.33337 7.9987C1.33337 11.6806 4.31814 14.6654 8.00004 14.6654Z" stroke="#3F3F46" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path id="Vector_2" d="M8 4V8L10.6667 9.33333" stroke="#3F3F46" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                        </svg>

                        {{$course['time_learn']}} Jam Belajar
                    </div>
                    <div class="rating ml-3 d-flex flex-row align-items-center text-gray-700">

                        <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-2">
                            <path d="M8.00002 12.172L3.29802 14.804L4.34802 9.5187L0.391357 5.86003L5.74269 5.22536L8.00002 0.332031L10.2574 5.22536L15.6087 5.86003L11.652 9.5187L12.702 14.804L8.00002 12.172Z" fill="#F59E0B" />
                        </svg>


                        {{$course['rating']}}
                    </div>
                    <div class="level ml-3 d-flex flex-row align-items-center text-gray-700">


                        <svg width="12" height="14" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-2">
                            <path d="M10 6H2V14L6.06452 12.336L10 14V6Z" fill="#2563EB" />
                            <path d="M6 0L8.61 1.47935L11.1962 3L11.22 6L11.1962 9L8.61 10.5207L6 12L3.39 10.5207L0.803848 9L0.78 6L0.803848 3L3.39 1.47935L6 0Z" fill="#3B82F6" />
                            <path d="M6 1L8.175 2.23279L10.3301 3.5L10.35 6L10.3301 8.5L8.175 9.76721L6 11L3.825 9.76721L1.66987 8.5L1.65 6L1.66987 3.5L3.825 2.23279L6 1Z" fill="#60A5FA" />
                            <path d="M6 3L6.96985 4.66512L8.85317 5.07295L7.56924 6.50988L7.76336 8.42705L6 7.65L4.23664 8.42705L4.43076 6.50988L3.14683 5.07295L5.03015 4.66512L6 3Z" fill="#BFDBFE" />
                        </svg>


                        {{$course['level']}}
                    </div>
                </div>
            </div>
        </div>

    </div>
    @endforeach
</div>
@extends('app')
@section('content')
<div class="container w-100" style="padding: 28px 30px 28px 30px;">
    <div class="row" style="margin-bottom:31px;">
        <div class="col-12">
            <h5 class="poppins-semibold" style="font-size:26px;">Dashboard</h5>
        </div>
    </div>
    <div class="main-content">
        <div class="row" style="margin-bottom: 26px;">
            <div class="col-10 d-flex flex-column">
                <span class="poppins-semibold mb-2" style="font-size:20; color: #3F4254;">Status Pengerjaan</span>
                <span class="poppins-semibold" style="font-size:10px; color: #B5B5C3;">1,046 Inbound Calls today</span>
            </div>
            <div class="col-2">
                <div class="d-flex justify-content-end align-items-center">
                    <div class="wrapper-calendar">
                        <span class="poppins-semibold" style="color: #B5B5C3; font-size:10px;">2 Feb 2023</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                            <path fill="#000" d="M6.94 2c.416 0 .753.324.753.724v1.46c.668-.012 1.417-.012 2.26-.012h4.015c.842 0 1.591 0 2.259.013v-1.46c0-.4.337-.725.753-.725s.753.324.753.724V4.25c1.445.111 2.394.384 3.09 1.055c.698.67.982 1.582 1.097 2.972L22 9H2v-.724c.116-1.39.4-2.302 1.097-2.972s1.645-.944 3.09-1.055V2.724c0-.4.337-.724.753-.724" />
                            <path fill="#000" d="M22 14v-2c0-.839-.004-2.335-.017-3H2.01c-.013.665-.01 2.161-.01 3v2c0 3.771 0 5.657 1.172 6.828S6.228 22 10 22h4c3.77 0 5.656 0 6.828-1.172S22 17.772 22 14" opacity="0.5" />
                            <path fill="#000" d="M18 17a1 1 0 1 1-2 0a1 1 0 0 1 2 0m0-4a1 1 0 1 1-2 0a1 1 0 0 1 2 0m-5 4a1 1 0 1 1-2 0a1 1 0 0 1 2 0m0-4a1 1 0 1 1-2 0a1 1 0 0 1 2 0m-5 4a1 1 0 1 1-2 0a1 1 0 0 1 2 0m0-4a1 1 0 1 1-2 0a1 1 0 0 1 2 0" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-bottom:26px;">
            <div class="col-3">
                <div class="card py-2" style="background: rgba(126, 130, 153, 0.08); border: none;">
                    <div class="card-body">
                        <h5 class="card-title poppins-semibold" style="font-size:34px; color: #3F4254;">259,786</h5>
                        <p class="card-text poppins-semibold" style="font-size:12px; color: #A1A5B7;">Total Shipment</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card py-2" style="background: rgba(255, 168, 0, 0.08); border: none;">
                    <div class="card-body">
                        <h5 class="card-title poppins-semibold" style="font-size:34px; color: #3F4254;">
                            <div class="d-flex align-items-center">
                                <span style="color: #7E8299; font-size:20px;">$</span>
                                <span style="color: #3F4254; font-size:34px;">69,700</span>
                                <div class="d-flex align-items-center p-1" style=" border-radius:3px; background-color: rgba(71, 190, 125, 0.2); margin-left:8px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                                        <path fill="none" stroke="#47BE7D" stroke-linecap="round" stroke-linejoin="round" d="m19 12l-7-7l-7 7m7-7v14" stroke-width="1" />
                                    </svg>
                                    <span class="poppins-semibold" style="font-size:14px; color: #47BE7D;">2.2%</span>
                                </div>
                            </div>
                        </h5>
                        <p class="card-text poppins-semibold" style="font-size:12px; color: #A1A5B7;">Total Online Sales</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card py-2" style="background: rgba(54, 153, 255, 0.08); border: none;">
                    <div class="card-body">
                        <h5 class="card-title poppins-semibold" style="font-size:34px; color: #3F4254;">47,769,700<span style="font-size: 8px; color:#A1A5B7;">Tons</span></h5>
                        <p class="card-text poppins-semibold" style="font-size:12px; color: #A1A5B7;">Total Cargo Tonnage</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card py-2" style="background:  rgba(71, 190, 125, 0.08); border: none;">
                    <div class="card-body">
                        <h5 class="card-title poppins-semibold" style="font-size:34px; color: #3F4254;">
                            <div class="d-flex align-items-center">
                                <span style="color: #3F4254; font-size:34px;">29,420</span>
                                <div class="d-flex align-items-center p-1" style="border-radius:3px; background-color: rgba(71, 190, 125, 0.2); margin-left:8px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                                        <path fill="none" stroke="#47BE7D" stroke-linecap="round" stroke-linejoin="round" d="m19 12l-7-7l-7 7m7-7v14" stroke-width="1" />
                                    </svg>
                                    <span class="poppins-semibold" style="font-size:14px; color: #47BE7D;">2.6%</span>
                                </div>
                            </div>
                        </h5>
                        <p class="card-text poppins-semibold" style="font-size:12px; color: #A1A5B7;">Total Online Visitors</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-10 d-flex flex-column">
                <span class="poppins-semibold mb-2" style="font-size:20; color: #3F4254;">Total Permintaan</span>
                <span class="poppins-semibold" style="font-size:10px; color: #B5B5C3;">1,046 Inbound Calls today</span>
            </div>
            <div class="col-2">
                <div class="d-flex justify-content-end align-items-center">
                    <div class="wrapper-calendar">
                        <span class="poppins-semibold" style="color: #B5B5C3; font-size:10px;">2 Feb 2023</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                            <path fill="#000" d="M6.94 2c.416 0 .753.324.753.724v1.46c.668-.012 1.417-.012 2.26-.012h4.015c.842 0 1.591 0 2.259.013v-1.46c0-.4.337-.725.753-.725s.753.324.753.724V4.25c1.445.111 2.394.384 3.09 1.055c.698.67.982 1.582 1.097 2.972L22 9H2v-.724c.116-1.39.4-2.302 1.097-2.972s1.645-.944 3.09-1.055V2.724c0-.4.337-.724.753-.724" />
                            <path fill="#000" d="M22 14v-2c0-.839-.004-2.335-.017-3H2.01c-.013.665-.01 2.161-.01 3v2c0 3.771 0 5.657 1.172 6.828S6.228 22 10 22h4c3.77 0 5.656 0 6.828-1.172S22 17.772 22 14" opacity="0.5" />
                            <path fill="#000" d="M18 17a1 1 0 1 1-2 0a1 1 0 0 1 2 0m0-4a1 1 0 1 1-2 0a1 1 0 0 1 2 0m-5 4a1 1 0 1 1-2 0a1 1 0 0 1 2 0m0-4a1 1 0 1 1-2 0a1 1 0 0 1 2 0m-5 4a1 1 0 1 1-2 0a1 1 0 0 1 2 0m0-4a1 1 0 1 1-2 0a1 1 0 0 1 2 0" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Chart -->
        <div class="row" style="margin-bottom: 26px;">
            <div class="col-12">
                <div class="p-2" style="width: 100%;"><canvas id="mychart" style="max-height: 300px;"></canvas></div>
            </div>
        </div>

        <!-- Activities -->
        <div class="row" style="padding-left: 20px; padding-right: 20px;">
            <div class="col-6">
                <div class="row mb-3">
                    <div class="col-10 d-flex flex-column">
                        <span class="poppins-semibold mb-2" style="font-size:20; color: #3F4254;">Recent Activities</span>
                        <span class="poppins-semibold" style="font-size:10px; color: #B5B5C3;">890,344 Sales</span>
                    </div>
                </div>
                <div class="row">
                    <ul class="timeline list-unstyled position-relative ps-3">
                        <li>
                            <div class="d-flex justify-content-start align-items-center">
                                <span class="fw-semibold small" style="margin-right: 10px;">08:42</span>
                                <div class="rounded-circle" style="width: 14px; height: 14px; background-color: #FFFFFF; margin-right: 10px; border: 4px solid #663259"></div>
                                <div class="text-muted small poppins-reguler" style="font-size: 12px;">Outlines keep you honest. Indulging in poorly driving and keep structure</div>
                            </div>
                        </li>
                        <li>
                            <div style="width: 3px; height: 40px; background-color: #E5EAEE; margin-left:54px;"></div>
                        </li>
                        <li>
                            <div class="d-flex justify-content-start align-items-center">
                                <span class="fw-semibold small" style="margin-right: 10px;">10:00</span>
                                <div class="rounded-circle" style="width: 14px; height: 14px; background-color: #FFFFFF; margin-right: 10px; border: 4px solid #1BC5BD"></div>
                                <div class="small poppins-bold" style="font-size: 12px; color: #000000;">AEOL meeting with</div>
                                <img src="{{asset('assets/img/person_1.png')}}" alt="Person 1" width="36px" style="margin-left: 5px;">
                                <img src="{{asset('assets/img/person_2.png')}}" alt="Person 2" width="36px" style="margin-left: 5px;">
                            </div>
                        </li>
                        <li>
                            <div style="width: 3px; height: 40px; background-color: #E5EAEE; margin-left:54px;"></div>
                        </li>
                        <li>
                            <div class="d-flex justify-content-start align-items-center">
                                <span class="fw-semibold small" style="margin-right: 10px;">14:37</span>
                                <div class="rounded-circle" style="width: 14px; height: 14px; background-color: #FFFFFF; margin-right: 10px; border: 4px solid #F64E60"></div>
                                <div class="small poppins-bold" style="font-size: 12px;">Make deposit <span style="color: #8950FC;">USD 700</span> to ESL</div>
                            </div>
                        </li>
                        <li>
                            <div style="width: 3px; height: 40px; background-color: #E5EAEE; margin-left:54px;"></div>
                        </li>
                        <li>
                            <div class="d-flex justify-content-start align-items-center">
                                <span class="fw-semibold small" style="margin-right: 10px;">16:50</span>
                                <div class="rounded-circle" style="width: 14px; height: 14px; background-color: #FFFFFF; margin-right: 10px; border: 4px solid #3699FF"></div>
                                <div class="text-muted small poppins-reguler" style="font-size: 12px;">Outlines keep you honest. Indulging in poorly driving and keep structure keep you honest great</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-6">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="d-flex flex-column">
                            <span class="poppins-reguler mb-2" style="font-size:20;">New Arrivals</span>
                            <span class="poppins-semibold" style="font-size:10px; color: #B5B5C3;">More than 400+ new members</span>
                        </div>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <button class="bg-light small border-0 poppins-semibold" style="color: #B5B5C3;">Month</button>
                        <button class="bg-light small border-0 poppins-semibold" style="color: #B5B5C3;">Week</button>
                        <button class="bg-secondary rounded border-0 text-white small">Day</button>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="py-3" colspan="2"><img src="{{asset('assets/img/184-plurk.png')}}" alt="Plurk Icon" width="45" class="p-2 rounded" style="background-color: #F3F6F9;"></td>
                                    <td class="w-50">
                                        <span class="poppins-semibold small" style="font-size:12px; color: #464E5F;">Stand Outstanding <br> FTP: <span style="color: #B5B5C3;">bprow@bnc.cc</span></span>
                                    </td>
                                    <td class="w-25 px-3">
                                        <div class="poppins-semibold small text-end" style="font-size:12px; color: #464E5F;">$2,000,000</div>
                                        <div class="text-end" style="color: #B5B5C3; font-size:12px;">Paid</div>
                                    </td>
                                    <td>
                                        <div class="px-2 py-1 rounded border-0 small text-center" style="font-size: 10px; background-color: #EEE5FF; color: #8950FC;">Approved</div>
                                    </td>
                                    <td class="w-25">
                                        <div class="d-flex position-relative">
                                            <button class="border-0" style="background-color: #FFFFFF;">
                                                <img src="{{asset('assets/img/ButtonSettings.png')}}" alt="button settings" width="34">
                                            </button>
                                            <button class="border-0" style="background-color: #FFFFFF;">
                                                <img src="{{asset('assets/img/ButtonEdit.png')}}" alt="button edit" width="34">
                                            </button>
                                            <button class="border-0" style="background-color: #FFFFFF;">
                                                <img src="{{asset('assets/img/ButtonTrash.png')}}" alt="button trash" width="34">
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="2"><img src="{{asset('assets/img/186-telegram.png')}}" alt="Plurk Icon" width="45" class="p-2 rounded" style="background-color: #F3F6F9;"></td>
                                    <td class="w-50">
                                        <span class="poppins-semibold small" style="font-size:12px; color: #464E5F;">Telegram Application <br> FTP: <span style="color: #B5B5C3;">bprow@bnc.cc</span></span>
                                    </td>
                                    <td class="w-25 p-3">
                                        <div class="poppins-semibold small text-end" style="font-size:12px; color: #464E5F;">$4,600,000</div>
                                        <div class="text-end" style="color: #B5B5C3; font-size:12px;">Paid</div>
                                    </td>
                                    <td>
                                        <div class="px-2 py-1 rounded border-0 small text-center" style="font-size: 10px; background-color: #FFF4DE; color: #FFA800;">In Progress</div>
                                    </td>
                                    <td class="w-25">
                                        <div class="d-flex position-relative">
                                            <button class="border-0" style="background-color: #FFFFFF;">
                                                <img src="{{asset('assets/img/ButtonSettings.png')}}" alt="button settings" width="34">
                                            </button>
                                            <button class="border-0" style="background-color: #FFFFFF;">
                                                <img src="{{asset('assets/img/ButtonEdit.png')}}" alt="button edit" width="34">
                                            </button>
                                            <button class="border-0" style="background-color: #FFFFFF;">
                                                <img src="{{asset('assets/img/ButtonTrash.png')}}" alt="button trash" width="34">
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="2"><img src="{{asset('assets/img/194-puzzle.png')}}" alt="Cisco Icon" width="45" class="p-2 rounded" style="background-color: #F3F6F9;"></td>
                                    <td class="w-50">
                                        <span class="poppins-semibold small" style="font-size:12px; color: #464E5F;">Cisco Management<br> FTP: <span style="color: #B5B5C3;">bprow@bnc.cc</span></span>
                                    </td>
                                    <td class="w-25 p-3">
                                        <div class="poppins-semibold small text-center" style="font-size:12px; color: #464E5F;">$560,000</div>
                                        <div class="text-center" style="color: #B5B5C3; font-size:12px;">Paid</div>
                                    </td>
                                    <td style="width: 15%;">
                                        <div class="px-2 py-1 rounded border-0 small text-center" style="font-size: 10px; background-color: #C9F7F5; color: #1BC5BD;">Success</div>
                                    </td>
                                    <td class="w-25">
                                        <div class="d-flex position-relative">
                                            <button class="border-0" style="background-color: #FFFFFF;">
                                                <img src="{{asset('assets/img/ButtonSettings.png')}}" alt="button settings" width="34">
                                            </button>
                                            <button class="border-0" style="background-color: #FFFFFF;">
                                                <img src="{{asset('assets/img/ButtonEdit.png')}}" alt="button edit" width="34">
                                            </button>
                                            <button class="border-0" style="background-color: #FFFFFF;">
                                                <img src="{{asset('assets/img/ButtonTrash.png')}}" alt="button trash" width="34">
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center small poppins-semibold text-muted mt-4">
        Made by Ahmad Zidan Alfa Robby
    </div>
</div>
@endsection
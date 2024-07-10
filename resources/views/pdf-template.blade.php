@extends('layouts.app')

@section('title', 'চুক্তিপত্রের জন্য আবেদন ২য় পৃষ্ঠা')

@section('content')
    @php
        $applicant = [];
       $alldata = (object) ['nationality' => 'Your Nationality']; // Replace with actual data retrieval
       $profiletypea = [];
       $profiletypeb = [];
       $profiletypec = [];
       $profiletyped = [];

    @endphp

    <div class="section pt-3 pb-5 chuktipotro2 service-single">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center">
                <div class="card w-100">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-application-tab" data-bs-toggle="tab" data-bs-target="#nav-application" type="button" role="tab" aria-controls="nav-application" aria-selected="true">
                                চুক্তিপত্রের জন্য আবেদন ২য় পৃষ্ঠা {{$type}} - {{$id}}
                            </button>
                        </div>
                    </nav>
                    <div class="tab-content p-4 border border-top-0" id="nav-tabContent">
                        <div class="tab-pane fade active show" id="nav-application" role="tabpanel" aria-labelledby="nav-application-tab">
                            <div class="applicationForm">
                                <div class="applicationForm-header text-center add2-application-header">
                                    <h4>বিষয়াবলীর বিবরণী</h4>
                                    <p><b>(দুটি প্রতিলিপি পাঠাতে হবে)</b></p>
                                </div>

                                <div class="my-2">
                                    <div class="d-flex">
                                        <p class="mt-2">১. নিবন্ধন সংখ্যাঃ </p>
                                        <p class="ms-5 px-3 py-2 rounded border text-success"> কপিরাইট অফিস কর্তৃক পূরণীয়</p>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <p class="mb-1"> ২. আবেদনকারীর তথ্যঃ</p>
                                    <div class="table-responsive">
                                        <table class="table text-center table-striped mb-2 table-bordered hover">
                                            <thead>
                                            <tr>
                                                <th>আবেদনকারীর নাম</th>
                                                <th>ই-মেইল</th>
                                                <th>মোবাইল নম্বর</th>
                                                <th>ঠিকানা</th>
                                                <th>জাতীয়তা</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>{{ $applicant->puname ?? 'N/A' }}</td>
                                                <td>{{ $applicant->user->email ?? 'N/A' }}</td>
                                                <td>{{ $applicant->mobileNo ?? 'N/A' }}</td>
                                                <td>{{ $applicant->place ?? 'N/A' }}</td>
                                                <td>{{ $alldata->nationality ?? 'N/A' }}</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="my-2">
                                    <p class="mb-1">৩.পক্ষদ্বয়ের নাম ও ঠিকানাঃ</p>
                                    <fieldset class="">
                                        <div class="table-responsive">
                                            <table class="table text-center table-striped mb-2 table-bordered hover">
                                                <thead>
                                                <tr class="text-start">
                                                    <th colSpan="7">ক. ১ম পক্ষ হস্তান্তর দাতা</th>
                                                </tr>
                                                </thead>
                                                <thead>
                                                <tr>
                                                    <th>পূর্ণ নাম</th>
                                                    <th>পিতার নাম</th>
                                                    <th>মাতার নাম</th>
                                                    <th>ঠিকানা</th>
                                                    <th>ভোটার আইডি নং</th>
                                                    <th>মোবাইল নং</th>
                                                    <th>ই-মেইল</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($profiletypea as $item)
                                                    <tr>
                                                        <td>{{ $item->name }}</td>
                                                        <td>{{ $item->fathername }}</td>
                                                        <td>{{ $item->mothername }}</td>
                                                        <td>{{ $item->address }}</td>
                                                        <td>{{ $item->nidno }}</td>
                                                        <td>{{ $item->mobile }}</td>
                                                        <td>{{ $item->email }}</td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </fieldset>

                                    <fieldset class="mt-3">
                                        <div class="table-responsive">
                                            <table class="table text-center table-striped mb-2 table-bordered hover">
                                                <thead>
                                                <tr class="text-start">
                                                    <th colSpan="7">খ. ২য় পক্ষ সত্মনিয়োগী / লাইসেন্স গ্রহীতা</th>
                                                </tr>
                                                </thead>
                                                <thead>
                                                <tr>
                                                    <th>পূর্ণ নাম</th>
                                                    <th>পিতার নাম</th>
                                                    <th>মাতার নাম</th>
                                                    <th>ঠিকানা</th>
                                                    <th>ভোটার আইডি নং</th>
                                                    <th>মোবাইল নং</th>
                                                    <th>ই-মেইল</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($profiletypeb as $item)
                                                    <tr>
                                                        <td>{{ $item->name }}</td>
                                                        <td>{{ $item->fathername }}</td>
                                                        <td>{{ $item->mothername }}</td>
                                                        <td>{{ $item->address }}</td>
                                                        <td>{{ $item->nidno }}</td>
                                                        <td>{{ $item->mobile }}</td>
                                                        <td>{{ $item->email }}</td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </fieldset>
                                </div>

                                <div class="my-4">
                                    <p class="mb-1">৪. সাক্ষীর নাম ও ঠিকানাঃ</p>
                                    <fieldset class="">
                                        <div class="table-responsive">
                                            <table class="table text-center table-striped mb-2 table-bordered hover">
                                                <thead>
                                                <tr class="text-start">
                                                    <th colSpan="7">ক. ১ম সাক্ষী</th>
                                                </tr>
                                                </thead>
                                                <thead>
                                                <tr>
                                                    <th>পূর্ণ নাম</th>
                                                    <th>পিতার নাম</th>
                                                    <th>মাতার নাম</th>
                                                    <th>ঠিকানা</th>
                                                    <th>ভোটার আইডি নং</th>
                                                    <th>মোবাইল নং</th>
                                                    <th>ই-মেইল</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @forelse ($profiletypec as $item)
                                                    <tr>
                                                        <td>{{ $item->name ?? 'N/A' }}</td>
                                                        <td>{{ $item->fathername ?? 'N/A' }}</td>
                                                        <td>{{ $item->mothername ?? 'N/A' }}</td>
                                                        <td>{{ $item->address ?? 'N/A' }}</td>
                                                        <td>{{ $item->nidno ?? 'N/A' }}</td>
                                                        <td>{{ $item->mobile ?? 'N/A' }}</td>
                                                        <td>{{ $item->email ?? 'N/A' }}</td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colSpan="7">No data available</td>
                                                    </tr>
                                                @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </fieldset>

                                    <fieldset class="mt-3">
                                        <div class="table-responsive">
                                            <table class="table text-center table-striped mb-2 table-bordered hover">
                                                <thead>
                                                <tr class="text-start">
                                                    <th colSpan="7">খ. ২য় সাক্ষী</th>
                                                </tr>
                                                </thead>
                                                <thead>
                                                <tr>
                                                    <th>পূর্ণ নাম</th>
                                                    <th>পিতার নাম</th>
                                                    <th>মাতার নাম</th>
                                                    <th>ঠিকানা</th>
                                                    <th>ভোটার আইডি নং</th>
                                                    <th>মোবাইল নং</th>
                                                    <th>ই-মেইল</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @forelse ($profiletyped as $item)
                                                    <tr>
                                                        <td>{{ $item->name ?? 'N/A' }}</td>
                                                        <td>{{ $item->fathername ?? 'N/A' }}</td>
                                                        <td>{{ $item->mothername ?? 'N/A' }}</td>
                                                        <td>{{ $item->address ?? 'N/A' }}</td>
                                                        <td>{{ $item->nidno ?? 'N/A' }}</td>
                                                        <td>{{ $item->mobile ?? 'N/A' }}</td>
                                                        <td>{{ $item->email ?? 'N/A' }}</td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colSpan="7">No data available</td>
                                                    </tr>
                                                @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .table th, .table td {
            vertical-align: middle;
        }
        .section-title {
            background-color: #f8f9fa;
            padding: 1rem;
            border-radius: 5px;
        }
        .section-header {
            margin-bottom: 1.5rem;
        }
    </style>
@endpush

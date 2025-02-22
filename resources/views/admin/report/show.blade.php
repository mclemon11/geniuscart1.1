@extends('layouts.load')
@section('content')
    <div class="content-area no-padding">
        <div class="add-product-content1">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-description">
                        <div class="body-area">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="table-responsive show-table">
                                        <table class="table">
                                            <tr>
                                                <th>{{ __('Reporter') }}</th>
                                                <td>{{ $data->user->name }}</td>
                                            </tr>
                                            <tr>
                                                <th>{{ __('Email') }}:</th>
                                                <td>{{ $data->user->email }}</td>
                                            </tr>
                                            @if ($data->user->phone != '')
                                                <tr>
                                                    <th>{{ __('Phone') }}:</th>
                                                    <td>{{ $data->user->phone }}</td>
                                                </tr>
                                            @endif

                                            <tr>
                                                <th>{{ __('Reported at') }}:</th>
                                                <td>{{ date('d-M-Y', strtotime($data->created_at)) }}</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <h5 class="comment">
                                        {{ __('Title') }}:
                                    </h5>
                                    <p class="comment-text">
                                        {{ $data->title }}
                                    </p>

                                    <h5 class="comment">
                                        {{ __('Note') }}:
                                    </h5>
                                    <p class="comment-text">
                                        {{ $data->note }}
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

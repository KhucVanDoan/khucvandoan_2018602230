@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Danh sách môn học') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table caption-top">
                  <th>STT</td>
                  <th>Tên môn</td>
                  <th>Hành động</td>
                  <tbody>
                    @foreach ($monhocs as $monhoc)
                        <tr>
                            <th scope="row">{{ ++$i }}</th>
                            <td> 
                                {{ $monhoc->tenmonhoc }}
                            </td>
                            <td> 
                               <a href="/dang-ky-hoc?mon={{ $monhoc->id }}&user={{ Auth::user()->id }}">Đăng ký</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

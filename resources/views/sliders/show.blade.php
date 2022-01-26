@extends('layout.master')
@section('content')
@extends('layout.master')
@section('content')

{{-- xxxxxxxx --}}

    <div class="card">
        <div class="card-header">
            <div class="card-title">
                <a href="{{ route('sliders.index') }}" class="btn btn-sm btn btn-info">List</a>
                <h3 class="mt-3">Individual Information</h3>
            </div>

        </div>

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Subtitle</th>
                        <th>Price</th>
                        <th>Link</th>
                        <th>Image</th>

                    </tr>
                </thead>

                <tbody>


                    <tr>

                            <td> {{ $slider->id }} </td>
                            <td> {{ $slider->title }} </td>
                            <td> {{ $slider->subtitle }} </td>
                            <td> {{ $slider->price }} </td>
                            <td> {{ $slider->link }} </td>
                            <td> {{ $slider->image }} </td>


                    </tr>


                </tbody>
            </table>
        </div>
    </div>

@endsection

@endsection

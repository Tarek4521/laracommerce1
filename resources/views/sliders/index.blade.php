@extends('layout.master')
@section('content')



    <div class="card">
        <div class="card-header">
            <div class="card-title">
                <a href="{{ route('sliders.create') }}" class="btn btn-sm btn btn-info">Create</a>
                <h3 class="mt-3">Slider List</h3>
            </div>

        </div>

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>title</th>
                        <th>subtitle</th>
                        <th>price</th>
                        <th>link</th>
                        <th>image</th>
                        <th>action</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($sliders as $slider)
                        <tr>



                            <td> {{ $slider->id }} </td>
                            <td> {{ $slider->title }} </td>
                            <td> {{ $slider->subtitle }} </td>
                            <td> {{ $slider->price }} </td>
                            <td> {{ $slider->link }} </td>
                            <td> {{ $slider->image }} </td>

                            <td>
                                <a href="{{ route('sliders.edit',$slider->id) }}" class="btn btn-info">Edit</a>

                            <form action="{{ route('sliders.destroy',$slider->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick=return confirm"Are you sure?you want to delete?">Delete</button>
                            </form>
                            <form action="{{ route('sliders.show',$slider->id) }}" method="post">
                                @csrf
                                @method('GET')
                                <button class="btn btn-danger">Show</button>
                            </form>
                            </td>
                    </tr>


                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

@endsection

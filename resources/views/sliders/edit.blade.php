@extends('layout.master')
@section('content')

<div class="card">
    <div class="card-header">
        <div class="card-title">
            <a href="{{ route('sliders.index') }}" class="btn btn-sm btn btn-info">Update</a>
            <h3 class="mt-3">Update Slider</h3>
        </div>

    </div>

    <div class="card-body">

       <form action="{{ route('sliders.update',$slider->id) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="form-group">
            <label class="col-md-10 control-label">Title</label>
            <div class="col-md-8">
                <input type="text" name="title" value="{{ $slider->title }}" placeholder="title" class="form-control input-md"/>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-10 control-label">Subtitle</label>
            <div class="col-md-8">
                <input type="text" name="subtitle" value="{{ $slider->subtitle }}" placeholder="subtitle" class="form-control input-md"/>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-10 control-label">Price</label>
            <div class="col-md-8">
                <input type="text" name="price" value="{{ $slider->price }}" placeholder="price" class="form-control input-md"/>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-10 control-label">Link</label>
            <div class="col-md-8">
                <input type="text" name="link" value="{{ $slider->link }}" placeholder="link" class="form-control input-md"/>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-10 control-label">Image</label>
            <div class="col-md-8">
                <input type="text" name="image" value="{{ $slider->image }}" placeholder="image" class="form-control input-md"/>
            </div>
        </div>

        </div>

        <div class="form-group">

          <button type="submit" class="btn btn-info">Submit</button>
        </div>

    </form>
    </div>

</div>

@endsection

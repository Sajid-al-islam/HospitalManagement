@extends('admin.layout.app')
@section('content')
<div class="content-wrapper">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Event</h4>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">

                        <button type="button" class="close" data-dismiss="alert">×</button>

                            <strong>{{ $message }}</strong>

                    </div>
                @endif
                <form class="forms-sample" method="POST" action="{{ route('product.update', $product->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Event Name</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{ $product->name }}" class="form-control" name="name" id="exampleInputUsername2" placeholder="Username" />
                        </div>
                    </div>

                    <img src="{{ asset('images/'. $product->logo) }}" height="40" alt="" srcset="">
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Logo</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" name="logo" id="exampleInputUsername2" placeholder="file" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Status</label>
                        <div class="col-sm-9">
                            <select name="status" class="form-control" id="exampleFormControlSelect2">
                                <option  value="1" {{ ($product->status === '1') ? 'selected' : '' }}>Active</option>
                                <option  value="0" {{ ($product->status === '0') ? 'selected' : '' }}>Deactive</option>
                            </select>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary mr-2">Update</button>
                    <button class="btn btn-dark">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
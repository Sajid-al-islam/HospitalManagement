@extends('admin.layout.app')
            

    @section('content')
        
            <div class="content-wrapper">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">All Events</h4>
                            <div class="table-responsive">
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success alert-block">

                                        <button type="button" class="close" data-dismiss="alert">×</button>

                                            <strong>{{ $message }}</strong>

                                    </div>
                                @endif
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Events</th>
                                            <th>Logo</th>
                                            <th>Created</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($collections as $item)
                                        
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            <td><img src="{{ asset('images/'. $item->logo) }}" height="60" alt="" srcset=""></td>
                                            <td>{{ $item->created_at }}</td>
                                            <td>
                                                @if ($item->status == 1)
                                                    <label class="badge badge-success">Activated</label>
                                                @else
                                                    <label class="badge badge-danger">pending</label>
                                                @endif
                                            </td>
                                            <td>
                                                <a type="button" href="{{ route('product.edit',$item->id) }}" class="btn btn-warning waves-effect waves-light m-1">
                                                <i class="fa fa-pencil"></i> <span>edit</span>
                                                {{-- <a type="button" href=""
                                                    onclick="return (confirm('Are You Sure??') && $.post('{{ route('admin_delete',['id'=>$item->id])}}', (res)=>{console.log(res,$(this).parents('tr').remove())}))" 
                                                    data-target="#deleteModal" class="btn btn-danger waves-effect waves-light m-1">
                                                        <i class="fa fa-trash-o"></i> <span>delete</span>
                                                </a> --}}
                                                <a href="{{ route('admin_delete',$item->id) }}" class="btn btn-danger waves-effect waves-light m-1">
                                                <i class="fa fa-pencil"></i> <span>Delete</span>
                                            </td>
                                        </tr>

                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
                </div>
            </footer>
            <!-- partial -->
    @endsection
    
                <!-- main-panel ends -->
            

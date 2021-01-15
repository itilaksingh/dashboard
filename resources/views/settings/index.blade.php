@extends('layouts.admin-layout')
@section('content')
<div class="row">
    
    <div class="col-lg-6 offset-md-3">
        
        <!-- Collapsable Card Example -->
        <div class="card shadow mb-4">
            <!-- Card Header - Accordion -->
            <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                <h6 class="m-0 font-weight-bold text-primary">Settings</h6>
            </a>
            <!-- Card Content - Collapse -->
            <div class="collapse show" id="collapseCardExample">
                <div class="card-body">
                    
                    <form action="{{url('settings/changePassword')}}" method="post">
                      @csrf  
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                           @if($errors->has('password'))
                                 <div class="alert alert-danger">{{ $errors->first('password') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Confirm Password</label>
                            <input type="password"  name="password_confirmation" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            @if($errors->has('password_confirmation'))
                                <div class="alert alert-danger">{{ $errors->first('password_confirmation') }}</div>
                            @endif
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
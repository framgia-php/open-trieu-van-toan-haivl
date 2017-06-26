@extends('admin.master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">User
                <small>Edit</small>
            </h1>
        </div>
        <!-- /.col-lg-12 -->
        <div class="col-lg-7" style="padding-bottom:120px">
             @include('admin.block.error')
            <form action="{{ route('user.update', $data['id']) }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Username</label>
                    <input class="form-control" name="txtUser" value="{{ old('txtUser', isset($data) ? $data['name'] : null) }}"
                        {{ App\Models\User::disabled($id) }}
                    />
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="txtPass" placeholder="Please Enter Password" {{ App\Models\User::disabled($id) }}
                    />
                </div>
                <div class="form-group">
                    <label>RePassword</label>
                    <input type="password" class="form-control" name="txtRePass" placeholder="Please Enter RePassword" {{ App\Models\User::disabled($id) }}
                     />
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="txtEmail" placeholder="Please Enter Email" value="{{ old('txtEmail', isset($data) ? $data['email'] : null) }}"
                       {{ App\Models\User::disabled($id) }}
                    />
                </div>
                @if (Auth::user()->id != $id)
                <div class="form-group">
                    <label>User Level</label>
                    <label class="radio-inline">
                        <input name="rdoLevel" value="1" 
                            @if ($data['role'] == 1)
                                checked="checked"  
                            @endif
                        type="radio">Admin
                    </label>
                    <label class="radio-inline">
                        <input name="rdoLevel" value="0"
                            @if ($data['role'] == 0) 
                                checked="checked"  
                            @endif
                         type="radio">Member
                    </label>
                    <label class="radio-inline">
                        <input name="rdoLevel" value="2"
                            @if ($data['role'] == 2) 
                                checked="checked"  
                            @endif
                         type="radio">Banned
                    </label>
                </div>
                @endif

                <button type="submit" class="btn btn-default">User Update</button>
            </form>
        </div>
    </div>
</div>
@endsection

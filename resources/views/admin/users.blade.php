@extends('admin.layouts.master')
@push('scripts')
<script>
$('input[name=status]').change(function(){
    var mode= $(this).prop('checked');
    var id=$( this ).val();
    console.log(id);
        var productObj = {};
        productObj.mode = $(this).prop('checked');
        productObj.id = $( this ).val();
        productObj._token = '{{csrf_token()}}';
    $.ajax({
      type:"POST",
      dataType:"JSON",
      url:"users/userStatus",
      data:productObj,
      success:function(data)
      {
        if (data.status == 'success') {
            $(".flashmessage").fadeIn('fast').delay(3000).fadeOut('fast').text(data.message);
        }
      }
    });
  });    
</script>
@endpush
@section('content')
<div class="page-content">
                    <!--Page title-->
                    <div class="page-title d-flex justify-content-between">
                        <h5> Users </h5>
                        <p class="mb-0"><a href="javascript:void(0)">Home</a> | <span>Users</span></p>
                    </div>
                    <!--end page title-->
                    
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12">
                            <div class="card ">
                                <div class="card-header d-flex justify-content-between">
                                    <h5 class="text-uppercase">All Users</h5>
                                </div>
                                <div class="flashmessage"></div>
                                <div class="card-body">
                                    <div class="table-content table-responsive">
                                        <div class="table-body hw45">
                                            <table class="table table-md table-hover va-middle">
                                                <thead class="bg-light">
                                                    <tr>
                                                        <th>Sl No</th>
                                                        <th>User Name</th>
                                                        <th>Email</th>
                                                        <th>Joined At</th>
                                                        <th>Image</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($users as $key =>$user)
                                                        <tr>
                                                            <td>{{ $key+1 }}</td>
                                                            <td>{{ $user->name }}</td>
                                                            <td>{{ $user->email }}</td>
                                                            <td>{{ date('M d Y',strtotime($user->created_at)) }}</td>
                                                            <td>  <img src="{{ $user->getFirstMediaUrl('profile','thumb') }}" alt=""> </td>
                                                            <td class="action-buttons">
                                                                <label class="switch" for="switch-primary-{{$user->id}}">
                                                                <input type="checkbox" name="status" class="" value="{{ $user->id }}" id="switch-primary-{{$user->id}}" {{ $user->status === 1 ? 'checked' : '' }}>
                                                                    <span class="slider round-switch"></span>
                                                                </label>              
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            {{ $users->links() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection

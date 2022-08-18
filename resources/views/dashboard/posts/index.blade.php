@extends('dashboard.layouts.dalem')
@section('judul','Dashboard')
@section('sub-judul','Post')
@section('isi')
  <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Data Lowongan</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              @if(session()->has('success'))
              <div class="alert alert-success alert-dismissible text-white" role="alert">
                <span class="text-sm">{{ session('success')}}</span>
                <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @endif
              @if (auth()->user()->level==1)
                <div class="ms-auto my-auto">
                    <div class="ms-auto my-auto ps-3">
                        <a href="/dashboard/posts/create" class="btn bg-gradient-primary btn-sm mb-0">+&nbsp; Tambah Data</a>
                    </div>
                </div>
              @endif
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2" width="30px">No</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Lowongan</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Kategori</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pelamar</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($post as $p)
                    <tr>
                      <td>
                          <p class="text-xs font-weight-bold mb-0">{{ $loop->iteration }}</p>
                      </td>
                      <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                            @if ($p->sampul)
                                <img src="{{ asset('storage/' . $p->sampul)}}" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                              @else
                                <img class="avatar avatar-sm me-3 border-radius-lg" src="https://source.unsplash.com/1200x600/?{{ $p->category->name }}" alt="">
                              @endif
                              
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">{{ $p->lowongan }}</h6>
                            </div>
                          </div>
                      </td>

                      <td>
                          <p class="text-xs font-weight-bold mb-0">{{ $p->category->name}}</p>
                        <p class="text-xs text-secondary mb-0">{{ $p->pendidikan->name_pendidikan }}</p>
                      </td>
                      <td>
                          <p class="text-xs font-weight-bold mb-0">{{ $p->gaji}}</p>
                        <p class="text-xs text-secondary mb-0">{{ $p->selesai }}</p>
                      </td>

                      <td class="align-middle text-center text-sm">
                        <input data-id="{{$p->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $p->status ? 'checked' : '' }}> 
                      </td>

                      <td class="align-middle text-center">
                          <a href="/dashboard/posts/{{ $p->slug }}" class="badge badge-sm bg-gradient-info text-white font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            View
                          </a>
                          @if (auth()->user()->level==1)
                          <a href="/dashboard/posts/{{ $p->slug }}/edit" class="badge badge-sm bg-gradient-success text-white font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            Edit
                          </a>
                          <form action="/dashboard/posts/{{ $p->slug }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="badge badge-sm bg-gradient-danger text-white font-weight-bold text-xs border-0" onclick="return confirm('Are You Sure?')">Hapus</button>
                          </form>
                          @endif
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

  <script>
  $(function() {
    $('.toggle-class').change(function() {
        var status = $(this).prop('checked') == true ? 1 : 0; 
        var post_id = $(this).data('id'); 
         
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '/dashboard/posts/status',
            data: {'status': status, 'post_id': post_id},
            success: function(data){
              console.log(data.success)
            }
        });
    })
  });
  </script>
  <!-- <script>
    $(function() {
      $('#toggle-two').bootstrapToggle({
        on: 'Enabled',
        off: 'Disabled'
      });
    });

    $('.toggle-class').on('change',function(){
      var status = $(this).prop('checked') == true ? 1 : 0;
      var id=$(this).val('id');
            alert(id);
              $.ajax({
                  type:'GET',
                  dataType:'json',
                  url:'/dashboard/posts/changeStatus',
                  data:{'status':status, 'id': id},
              success:function(data){
              console.log(data);
              }
     });
  });
  </script> -->
@endsection
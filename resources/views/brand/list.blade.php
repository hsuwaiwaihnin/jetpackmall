<x-backend>
	<!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Brand List</h6>
            <a href="{{route('brand.create')}}" class="btn btn-outline-success btn-sm float-right"><i class="fas fa-plus"></i></a>
        </div>
        <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @php $i=1; @endphp
                    @foreach($brands as $brand)
                    @php 

                    $id=$brand->id;
                    $name=$brand->name;
                    $logo=$brand->logo;
                    @endphp
                    <tr>
                      <td> {{$i++}}. </td>
                      <td>
                        <img src="{{asset($logo)}}" class="img-fluid" style="width: 70px; height: 50px;">{{$name}}
                      </td>
                      <td>
                        <a href="{{route('brand.edit',$id)}}" class="btn btn-warning">
                          <i class="fas fa-tools"></i>
                        </a>
                        <form action="{{route('brand.destroy',$id)}}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure?')">

                          @csrf
                          @method('DELETE')

                          <button class="btn btn-outline-danger" type="submit"><i class="fas fa-times"></i></button>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
        </div>
    </div>
</x-backend>
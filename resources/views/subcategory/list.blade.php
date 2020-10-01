<x-backend>
	<!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Subcategory List</h6>
            <a href="{{route('subcategory.create')}}" class="btn btn-outline-success btn-sm float-right"><i class="fas fa-plus"></i></a>
        </div>
        <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Category</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Category</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @php $i=1; @endphp
                    @foreach($subcategories as $subcategory)
                    @php 

                    $id=$subcategory->id;
                    $name=$subcategory->name;
                    $category_id=$subcategory->category_id;
                    @endphp
                    <tr>
                      <td> {{$i++}}. </td>
                      <td>{{$name}}</td>
                      <td> {{$category_id}}</td>
                      <td>
                        <a href="{{route('subcategory.edit',$id)}}" class="btn btn-warning">
                          <i class="fas fa-tools"></i>
                        </a>
                        <form action="{{route('subcategory.destroy',$id)}}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure?')">

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
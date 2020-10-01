<x-backend>
	<!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> 
            	Create New Brand 

            	<a href="{{ route('brand.index') }}" class="btn btn-outline-success btn-sm float-right"> <i class="fas fa-backward"></i> </a>

            </h6>

        </div>
        <form action="{{ route('brand.store') }}" method="POST" enctype="multipart/form-data">
            
            @csrf

            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-md-12 ">
                        <label for="logo"> Logo </label>
                        <input type="file" id="logo" name="logo">

                        <div class="text-danger form-control-feedback">
                            {{ $errors->first('name') }}
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12 ">
                        <label for="name"> Name </label>
                        <input type="text" class="form-control" id="name" placeholder="DELL" name="name">

                        <div class="text-danger form-control-feedback">
                            {{ $errors->first('logo') }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="reset" class="btn btn-secondary text-uppercase mr-2"> 
                    <i class="fas fa-times mr-2"></i> Cancel 
                </button>
                <button type="submit" class="btn btn-primary text-uppercase"> 
                    <i class="fas fa-save mr-2"></i> Save 
                </button>
            </div>
        </form>

    </div>
</x-backend>
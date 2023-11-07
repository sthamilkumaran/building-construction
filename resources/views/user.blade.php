<!doctype html>
<html lang="en">
  <head>
  	<title>Cost Estimation Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

		<link rel="stylesheet" href="css/ionicons.min.css">
		<link rel="stylesheet" href="css/style.css">
  </head>
  <body>
		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-6 text-center d-flex align-items-center">
						<div class="wrap w-100" style="margin-bottom: 40px">
							<h2 class="mb-2">Cost Estimation Form</h2>
							<button type="button" class="btn btn-primary py-3 px-4" data-toggle="modal" data-target="#exampleModalCenter">
                            Cost Estimation Form
							</button>
							<!-- Modal -->
						</div>
					</div>
				</div>
			</div>
		</section>

		<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true" class="ion-ios-close"></span>
		        </button>
		      </div>
		      <div class="modal-body p-4 p-md-5">
		      	<h3 class="text-center mb-4">Cost Estimation Form</h3>
		      	<form method="POST" action="{{ route('contacts.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="type">Type of Building:</label>
                        <select class="form-control" name="type" required>
                          <option placeholder="None"></option>
                          <option>Residential</option>
                          <option>Commercial</option>
                          <option>Industrial</option>
                        </select>
                      </div>

                    <div class="form-group">
                      <label for="floors">Number of Floors</label>
                      <input type="number" class="form-control" name="floors" placeholder="2(or)3" required>
                    </div>

                    <div class="form-group">
                      <label for="area">Total Area</label>
                      <input type="number" class="form-control" name="area" placeholder="2(or)3" required>
                    </div>

                    <div class="form-group">
                        <label for="materials">Cost of Materials per sq. ft.</label>
                        <input type="number" class="form-control" name="materials" placeholder="2(or)3" required>
                    </div>

                    <div class="form-group">
                        <label for="labor">Labor Cost per Hour</label>
                        <input type="number" class="form-control" name="labor" placeholder="2(or)3" required>
                    </div>

                    <div class="form-group">
                        <label for="additional">Additional Features</label>
                        <textarea class="form-control" name="additional" rows="3"></textarea>
                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
		      </div>
		    </div>
		  </div>
		</div>

        <table class="table table-bordered mb-10 m-10 table-hover">
            <tr>
                <th>Type of Building</th>
                <th>Number of Floors</th>
                <th>Total Area</th>
                <th>Cost of Materials per sq. ft.</th>
                <th>Labor Cost per Hour</th>
                <th>Additional Features</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($userForms as $userForm)
            <tr>
                <td>{{ $userForm->type }}</td>
                <td>{{ $userForm->floors }}</td>
                <td>{{ $userForm->area }}</td>
                <td>{{ $userForm->materials }}</td>
                <td>{{ $userForm->labor }}</td>
                <td>{{ $userForm->additional }}</td>
                <td>
                    <form action="{{ route('contacts.destroy',$userForm->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('contacts.show',$userForm->id) }}">Show</a>

                        {{-- <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a> --}}

                        {{-- @csrf --}}
                        {{-- @method('DELETE') --}}

                        {{-- <button type="submit" class="btn btn-danger">Delete</button> --}}
                    </form>
                </td>
            </tr>
            @endforeach
        </table>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>

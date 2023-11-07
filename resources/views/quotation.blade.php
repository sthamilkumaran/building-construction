<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Quotation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Quotation</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Client Information</h5>
                                <p>Name: John Doe</p>
                                <p>Company: ABC Corporation</p>
                                <p>Email: john@example.com</p>
                            </div>
                            <div class="col-md-6 text-right">
                                <h5>Quotation Details</h5>
                                <p>Date: October 10, 2023</p>
                                <p>Quote :-{{ $userForm->id }}</p>
                            </div>
                        </div>
                        <hr>
                        <h5>{{ $userForm->type }}</h5>

                        <table class="table .table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Item</th>
                                    <th>Quantity</th>
                                    <th>Unit Price</th>
                                    <th>Total</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Floors</td>
                                    <td>{{ $userForm->floors }}</td>
                                    <td>Rs 500</td>
                                    <td>Rs {{$Rfloar}}</td>
                                </tr>
                                <tr>
                                    <td>Area</td>
                                    <td>{{ $userForm->area }}</td>
                                    <td>Rs 3000</td>
                                    <td>Rs {{$Rarea}}</td>
                                </tr>
                                <tr>
                                    <td>Cost of Materials per sq. ft.</td>
                                    <td>{{ $userForm->materials }}</td>
                                    <td>Rs 2500</td>
                                    <td>Rs {{$Rmaterials}}</td>
                                </tr>
                                <tr>
                                    <td>Labor Cost per Hour</td>
                                    <td>{{ $userForm->labor }}</td>
                                    <td>Rs 2000</td>
                                    <td>Rs {{$Rlabor}}</td>
                                </tr>
                                <tr>
                                    <td>Additional Features</td>
                                    <td>{{ $userForm->additional }}</td>
                                    <td>Rs 50 000</td>
                                    <td>Rs {{$Radditional}}</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="row justify-content-end">
                            <div class="col-md-4 text-right">
                                <p><strong>Total: Rs {{ $total }}</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="assets/dist/css/adminlte.min.css?v=3.2.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
    body,
    html {
        height: 100%;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #f8f9fa;
    }

    .container {
        max-width: 900px;
        background-color: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .img-fluid {
        max-height: 500px;
        border-radius: 10px;
    }

    .form-control {
        border-color: #ced4da;
        border-radius: 5px;
        padding: 10px;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        padding: 10px 20px;
        border-radius: 5px;
        font-weight: bold;
    }

    .input-group-text {
        background-color: #f1f1f1;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?fit=crop&w=600&q=80" alt="อาหาร"
                    class="img-fluid rounded shadow">
            </div>

            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <div class="w-100 p-4" style="background-color: #ffffff; border-radius: 10px;">
                    <h1 class="text-center mb-4" style="color: #343a40;">Login</h1>
                    <form>
                        <div class="mb-3">
                            <label for="username" class="form-label" style="font-weight: bold;">Username</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </span>
                                <input type="text" class="form-control" id="username" placeholder="username" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label" style="font-weight: bold;">Password</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fas fa-lock"></i>
                                </span>
                                <input type="password" class="form-control" id="password" placeholder="password"
                                    required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
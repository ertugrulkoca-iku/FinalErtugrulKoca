<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <title>Student Save</title>
</head>
<body>
<div class="container">
        <div class="row" style="margin-top: 65px;">
            <div class="col-md-4 offset-md-4">
                <h4>Student Save</h4>
                <hr>

                    <form action="{{ route('ogrencikayit') }}" method="POST">

                    @if (Session::get('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                        @endif
                        @if (Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                        @endif
                        @csrf
                        
                        <div class="form-group">
                            <label for="name">Student Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter your first name">

                        </div>
                        <div class="form-group">
                            <label for="email">Student Surname</label>
                            <input type="text" class="form-control" name="surname" placeholder="Enter your surname">

                        </div>
                        <div class="form-group">
                            <label for="department">Department</label>
                            <input type="text" class="form-control" name="department" placeholder="Enter your department">
                        </div>
                        <button type="submit" class="btn btn-block btn-info">Save</button>
                    </form>
            </div>
        </div>
    </div>
</body>
</html>
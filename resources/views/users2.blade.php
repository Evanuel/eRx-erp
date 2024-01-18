{{-- @extends('template.template')
{{-- @extends('template.navbar') --}}
{{-- @section('content') --}}
{{-- @endsection --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
    <!-- DATATABLE -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

    <title>Document</title>
</head>
<body>
    

    <table class="table table-striped table-bordered user_datatable m-2 ">
        <thead class="table-dark">
        <tr>
            <th scope="col">CODIGO</th>
            <th scope="col">NOME</th>
            <th scope="col">E-MAIL</th>
            <th scope="col" width='180px'>Action</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
    <!-- DATATABLE -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            var table = $('.user_datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax:"{{route('users.index')}}",
                columns:[
                    {data:'id', name: 'id'},
                    {data:'name', name: 'name'},
                    {data:'email', name: 'email'},
                    {data:'action', name: 'action', orderable:false, searchable:false},
                ]
            })
        })
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="/js/prueba/app1.js"></script>
    <script src="/js/prueba/jquery.js"></script>
    <title>Document</title>
</head>

<body>
    <center>
        <h1> Laraavel Dynami Drop whiy ajaax</h1>
        <span>Product categor:</span>
        <select class="productcategory" id="categoria" name="categoria" style="width: 200px">
            <option value="0" disabled="true" selected="true">-Select-</option>
            @foreach($peli as $pe)
            <option value="{{$pe->id}}">{{$pe->nombre}}</option>
            @endforeach
        </select>

        <span>Product name:</span>
        <select class="productname" style="width: 200px">
            <option value="0" disabled="true" selected="true">Product Name</option>

        </select>

        <span>Produc Price</span>
        <input type="text" class="prod_price">
    </center>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>



    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function(event) {
            $(document).on('change', '#categoria', function() {

                // console.log("hmm its change");
                var cat_id = $(this).val();
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'get',
                    url: "{{ url('encontrarPelicula') }}",
                    data: {
                        'id': cat_id
                    },
                    success: function(data) {
                        console.log('success');

                        console.log(data[0]['id']);


                    },
                    error: function() {
                        console.log('este es el error');

                    }
                });
            })

        });
    </script>





</body>

</html>
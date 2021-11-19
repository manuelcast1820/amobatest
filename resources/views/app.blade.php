<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" value="{{ csrf_token() }}" />

    <title>Vue JS CRUD Operations in Laravel</title>

    <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" />
</head>

<body>
    @php
            $user_auth_data = [
                'isLoggedin' => false,
            ];
        @endphp
    {{-- @if (Auth::check())
        @php
            
            $user_auth_data = [
                'isLoggedin' => true,
                'user' => Auth::user(),
            ];
        @endphp
    @else
        @php
            $user_auth_data = [
                'isLoggedin' => false,
            ];
        @endphp
    @endif --}}
    <script>
        const headers = {
            Authorization: `Bearer ${localStorage.token}`
        };
        var url = "http://amoba.test/api/validate-token";

        var xhr = new XMLHttpRequest();
        xhr.open("GET", url);

        xhr.setRequestHeader("Accept", "application/json");
        xhr.setRequestHeader("Authorization", `Bearer ${localStorage.token}`);

        xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            console.log(xhr.status);
            let response = JSON.parse(xhr.responseText);
            if(response.success){
                console.log('logueadoooooooooooo')
                <?php
                     $user_auth_data = [
                         'isLoggedin' => true,
                         'user' => Auth::user(),
                     ];
                ?>
            }
        }};

        xhr.send();
        // axios.get('http://amoba.test/api/validate-token', {
        //         headers: {
        //             'Accept': 'application/json',
        //             'Authorization': 'Bearer ' + 'user-api-token'
        //         }
        //     })
        //     .then(function(response) {
        //         // handle success
        //         if (response.success) {
        //             console.log(' logueado')
        //             <?php
        //             $user_auth_data = [
        //                 'isLoggedin' => true,
        //                 'user' => Auth::user(),
        //             ];
        //             ?>
        //         }else {
        //             <?php
        //             $user_auth_data = [
        //                 'isLoggedin' => false,
        //             ];
        //             ?>
        //         }
        //         console.log(response);
        //     })
        //     .catch(function(error) {
        //         // handle error
        //         console.log(error);
        //     })


        window.Laravel = JSON.parse(atob('{{ base64_encode(json_encode($user_auth_data)) }}'));
    </script>
    <div id="app"></div>
    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
</body>

</html>

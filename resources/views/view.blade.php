<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center full-height">
           <table>
                <thead>
                    <th>emp_ID</th>
                    <th>emp_name</th>
                    <th>emp_contact</th>
                    <th>city</th>
                    <th>dept_ID</th>
                    <th>desig_ID</th>
                    <th>eORa</th>
                    <th>update</th>
                    <th>password</th>
                    <th>EDIT</th>
                    <th>DELETE</th>
                </thead>
                @if(is_array($data))
                    @foreach($data as $row) 
                        <tr><td>{{$row['emp_ID']}}</td>
                            <td>{{$row['emp_name']}}</td>
                            <td>{{$row['emp_contact']}}</td>
                            <td>{{$row['city']}}</td>
                            <td>{{$row['dept_ID']}}</td>
                            <td>{{$row['desig_ID']}}</td>
                            <td>{{$row['eORa']}}</td>
                            <td>{{$row['updateDate']}}</td>
                            <td>{{$row['password']}}</td>
                            <td><a href="{{ url('/'.$row['emp_ID']) }}">EDIT</a></td>
                            <td><a href="{{ url('/view/'.$row['emp_ID']) }}">DELETE</a></td></tr>
                    @endforeach
                @endif
           </table>
        </div>
    </body>
</html>

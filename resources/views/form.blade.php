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
        <h1  align="center">ADMIN</h1>
    </head>
    <body>
        <div align="center" class="full-height">
            <form method='post' action="{{ isset($data->emp_ID) ? url('/'.$data->emp_ID) : url('/') }}">

                <input class="alert alert-info" type="hidden" name="id"  placeholder="Name"  
                    value="{{ $data->emp_ID ?? '' }}">

                <label>Name</label><br/>     
                    <input class="alert alert-info" type="text" name="name"  placeholder="Name"  
                    value="{{ $data->emp_name ?? '' }}">
                <br/>
 
                <label>Contact number</label><br/>     
                    <input class="alert alert-info" type="text" name="contactNo" placeholder="Contact Number" 
                    value="{{ $data->emp_contact ?? '' }}">
                <br/>

                <label>Password</label><br/>     
                    <input class="alert alert-info" type="text" name="password" placeholder="Password" 
                    value="{{ $data->password ?? '' }}">
                <br/>
  

                <label>City</label><br/>     
                    <input class="alert alert-info" type="text" name="city" placeholder="City" 
                    value="{{ $data->city ?? '' }}">
                <br/>
 
                <label>Department</label><br/> 
                    <label>HR &nbsp<input type="radio" name="department" value=1  ></label>
                    <label>Delivery &nbsp<input type="radio" name="department" value=2 ></label>
                    <label>Sales &nbsp<input type="radio" name="department" value=3  ></label>
                <br/>    

                <label>Designation</label><br/>     
                    <select class="alert alert-info" required  name="designation">
                        <option disabled selected value> -- select an option -- </option>
                        <option value=1 >Trainee</option>
                        <option value=2 >Associate</option>
                        <option value=3 >Manager</option>
                    </select>
                <br/> 

                <label>Employee or Admin</label><br/> 
                <label>Employee &nbsp<input type="radio" name="eORa" value=1 ></label>
                <label>Admin &nbsp<input type="radio" name="eORa" value=0 ></label>
                <br/>

                <button id="submitbutton" type="submit" name="submit" value="Submit">Save</button>
                <br>
            </form>
        </div>
    </body>
</html>

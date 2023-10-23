<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display-Form</title>
</head>
<body>
    <h1>Student submit form</h1>

    <form action="{{url('form-submit')}}" method="post">
       {{@csrf_field()}} 
        <table> 
            <tr>
                <td>First Name : </td>
                <td> <input type="text" name="fname" ></td>
            </tr>
            <tr>
                <td>Last Name : </td>
                <td> <input type="text" name="lname" ></td>
            </tr>
            <tr>
                <td>Marks1 : </td>
                <td> <input type="text" name="marks1" ></td>
            </tr>
            
            <tr>
                <td>Marks2 : </td>
                <td> <input type="text" name="marks2" ></td>
            </tr>
            <tr>
                
                <td colspan="2"> <input type="submit" name="save" value="Submit" ></td>
            </tr>
            {{-- <input type="button" name="add" value="Add">
            <input type="button" name="display" value="Display"><br><br> --}}
        </table>
    </form>
</body>
</html>
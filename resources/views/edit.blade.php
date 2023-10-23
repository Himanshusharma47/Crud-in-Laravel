<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Display</title>
</head>
<body>
    <form action="{{url('edit-form/' . $findrow[0]->id)}}" method="post">
        {{@csrf_field()}} 
         <table> 
             <tr>
                 <td>First Name : </td>
                 <td> <input type="text" name="fname" value="{{isset($findrow[0]->firstname) ? $findrow[0]->firstname : ''}}" ></td>
             </tr>
             <tr>
                 <td>Last Name : </td>
                 <td> <input type="text" name="lname" value="{{isset($findrow[0]->lastname) ? $findrow[0]->lastname : ''}}" ></td>
             </tr>
             <tr>
                 <td>Marks1 : </td>
                 <td> <input type="text" name="marks1" value="{{isset($findrow[0]->marks1) ? $findrow[0]->marks1 : ''}}" ></td>
             </tr>
             
             <tr>
                 <td>Marks2 : </td>
                 <td> <input type="text" name="marks2" value="{{isset($findrow[0]->marks2) ? $findrow[0]->marks2 : ''}}" ></td>
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
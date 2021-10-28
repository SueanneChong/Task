<!DOCTYPE HTML>
<html>

<head>
    <style>
        p{
            font-weight: bold;
    font-size: 25px;
    border: solid 2px rgb(143, 15, 22);
    padding: 10px 35px 10px 25px;
    color: white;
    background-color: #f84f6e;
    border-radius: 20px;
    font-family: cursive;
    border-radius: 12px;
        box-shadow: 10px 15px 30px rgb(133, 133, 133);

}
        body{
            margin-left:auto;
            margin-right:auto;
            width:650px;
            /*background-color:#d3d3f7;*/
        }

#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}


    </style>
    <title>CUSTOMER REGISTRATION</title>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src='formvalid.js'></script>
</head>

<body>
  <p>
    CUSTOMER LIST
       </p>
<div>
       <table id="customers">
       <tbody>
        <tr>
           <th>NAME</th>
           <th>COUNTRY</th>
           <th>EMAIL</th>
           <th>PHONE NUMBER</th>
         </tr>
       @foreach($cust as $cust)
 <tr>
    <td>{{ $cust['name'] }} </td>
    <td>{{ $cust['country'] }} </td>
    <td>{{ $cust['email'] }} </td>
    <td>{{ $cust['phoneNo'] }} </td>
  </tr>
       <!-- <div>{{ $cust['name'] }} - {{ $cust['phoneNo'] }}</div> -->

      @endforeach

      </tbody>
       </table>
     </div>



</body>


</html>

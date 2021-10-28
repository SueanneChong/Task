<!DOCTYPE HTML>
<html>

<head>
    <style>
        legend{
            font-weight: bold;
    font-size: 25px;
    border: solid 2px rgb(143, 15, 22);
    padding: 10px 35px 10px 25px;
    color: white;
    background-color: #f84f6e;
    border-radius: 20px;
    font-family: cursive;
    margin-left: 35px;

}
        fieldset{
            margin-left:auto;
            margin-right:auto;
            width:650px;
            background-color:#d3d3f7;
    border-radius: 12px;
    box-shadow: 10px 15px 30px rgb(133, 133, 133);
        }
        tr{
            height:50px;
            color:green;
        }


    </style>
    <title>CUSTOMER HOMEPAGE</title>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

</head>

<body>
    <form action="db.php" method="GET" onsubmit="return formValidation()">
        <fieldset>
            <legend> WELCOME PAGE</legend>
        <table>
            <tbody>
            <tr>
            <td>
            NAME
            </td>
             </tr>
             <tr>
                         <td>
                         COUNTRY
                         </td>
                          </tr>
                          <tr>
                                      <td>
                                      EMAIl
                                      </td>
                                       </tr>
                                       <tr>
                                                   <td>
                                                   PHONE NUMBER
                                                   </td>
                                                    </tr>

        </tbody>
        </table>
    </fieldset>
    </form>

</body>


</html>

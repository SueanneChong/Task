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
    <title>CUSTOMER REGISTRATION</title>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

</head>

<body>

    <form action="/test1" method="POST" onsubmit="return formValidation()">
    @csrf
        <fieldset>
            <legend> CUSTOMER PERSONAL INFORMATION </legend>
        <table>
            <tbody>
            <tr>
                <td>Name :</td>
                <td><input type="text" name="custName" required maxlength="50" onChange="checkName(this)"></td>
            </tr>
          <!--  <tr>
                <td>Age :</td>
                <td><input type="number" name="custAge" required value="1" min="1" max="150"></td>
            </tr> -->
            <tr>
                <td>Country :</td>
                <td><input type="text" list="countries" name="custNation" required value="Malaysia">
                    <datalist id="countries">
                    <option value="India">India</option>
                    <option value="Malaysia">Malaysia<option>
        <option value="United States">United States</option>
        <option value="United Kingdom">United Kingdom</option>
        <option value="Germany">Germany</option>
        <option value="France">France</option>
        <option value="Afghanistan">Afghanistan</option>
    <option value="Albania">Albania</option>
    <option value="Yemen">Yemen</option>
    <option value="Zambia">Zambia</option>
    <option value="Zimbabwe" >Zimbabwe</option>
                    </datalist></td>
            </tr>
           <!--  <tr>
                <td>Gender :</td>
                <td>
                    <input type="radio" name="gender" value="m" required>Male
                    <input type="radio" name="gender" value="f" required>Female
                </td>
            </tr> -->
            <tr>
                <td>Email :</td>
                <td><input type="email" name="custEmail" required placeholder="xxx@xxx.xxx" maxlength="50"></td>
            </tr>
            <tr>
                <td>Phone no :</td>
                <td>
                    <input type="phone" name="custPhone" required placeholder="(nnn)nnn-nnnn" maxlength="12">
                </td>
            </tr>
           <!--   <tr>
                <td>Emergency Contact Name :</td>
                <td>
                    <input type="text" name="emergencyName" required maxlength="50">
                </td>
            </tr> -->
             <!--  <tr>
                <td>Emergency Contact No :</td>
                <td>
                    <input type="phone" name="emergencyPhone" required placeholder="(nnn)nnn-nnnn" maxlength="12">
                </td>
            </tr> -->

            <tr>
                <td><input type="submit" value="Submit"></td>
                <td><input type="reset" value="Reset/Cancel"></td>
                <td style="font-weight: bold;">HELP <i class='fas fa-question-circle' style='font-size:25px;color:blue'></i></td>
            </tr>
        </tbody>
        </table>
    </fieldset>
    </form>

</body>


</html>

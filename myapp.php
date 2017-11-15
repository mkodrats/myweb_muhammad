<!DOCTYPE html>
<html>
    <head>
        <title>Kalkulator sederhana dengan php</title>
    </head>
    <body>
        <form action="myapp.php" method="POST">
            <table cellpadding="4" border = "3">  
                <tr>
                    <td>Nilai 1 : <input type="text" name="nil1"  size="5"></td>
                </tr>
                <tr>
                   <td align="center" colspan="2">
                        <select name="operasi">
                            <option value="+">+</option>
                            <option value="-">-</option>
                            <option value="*">*</option>
                            <option value="/">/</option>
                            <option value="mod">%</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Nilai 2 : <input type="text" name="nil2" size="5"></td>
                </tr>
                <tr>
                    <td>
                        Hasil:
        <?php
              error_reporting(E_ALL ^ E_NOTICE);
             $nilai1  = $_POST['nil1'];
             $nilai2  = $_POST['nil2'];
             $oprator = $_POST['operasi'];
             if ($oprator == "+"){
                echo $nilai1+$nilai2;
            }
            elseif ($oprator == "-"){
                echo $nilai1-$nilai2;
            }
            elseif ($oprator == "*"){
                echo $nilai1*$nilai2;
            }
            elseif ($oprator == "/"){
                echo $nilai1/$nilai2;
            }
            elseif ($oprator == "mod"){
                echo $nilai1%$nilai2;
            }else
                 {
                  echo "Tidak dikenal";
                 }
         ?>
                    </td>
                </tr>
            </table>
        <br><br>

<input type="submit" value="Hitung">
<input type="reset" value="Reset">

</form>
<br>
</body>
</html>


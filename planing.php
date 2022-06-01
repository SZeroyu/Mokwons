<!--학업계획등록-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>학업계획등록</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/main2.css">
    <link rel="stylesheet" href="./css/planing2.css">
</head>
     

<body>
  <div><?php include "main2_2.php";?></div>

    <main class="planing">
        <div class="plan">
            <form name="mokwon" action="planing_action.php" method="post">
                <table align=center border="0" cellspacing="1" style=" font-weight: bold; ">
                <div class="plan">
                <tr>
                    <td>학업계획년도 <input type="date" name="year" value="" min="2021-01-01" max="2022-12-31">
                        학기 <input type="number" name="semester"value="" min="1" max="2"></td>
                  </tr></div>
                  <tr><td bgcolor="white" class=table_su><tr></td>

                <div class="plan">
                <tr><td bgcolor="#d4e1ff" align=center>학업계획<textarea name=content class="inph" name="plan" cols=85 row=50 style="resize: none"></textarea></td></tr>              
                </div>

                <div class="plan">
                <tr>
                  <td bgcolor="#d4e1ff" align=center>
                    취업희망분야<textarea name=content cols=85 class="inph" name="filed" row=50 style="resize: none"></textarea></td>
                  </tr>               
                </div>

                  <tr><td  colspan="1" width="100%">
                  <input type="submit" class="btn" value="저장"></td></tr>
 
             </table>
            </form>
            </div>
    </main>
</body>
</html>
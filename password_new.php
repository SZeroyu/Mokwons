<!-- 비밀번호변경 -->
<!DOCTYPE html>
<html lang='en' dir="ltr">
<head>
    <meta charset="utf-8" />
    <title>비밀번호변경</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/main1.css">
    <link rel="stylesheet" href="./css/new_pwd.css">
</head>

<body>
  <div><?php include "main_2.php";?></div>

    <main class="password_new">
        <div class="password">
            <form action="password_new_check.php" method="post">

                <table id="table_1" align=center cellspacing="10";>
                <div>
                    <tr>
                      <th colspan="2" bgcolor="#DFE6F7">현재 비밀번호</th>
                      <td colspan="2"><input type="password" name="current_password" value=""  class="inph_3" placeholder="현재 비밀번호"></td>
                    </tr>
                </div>
                <div>
                    <tr>
                      <th colspan="2" bgcolor="#DFE6F7">새 비밀번호</th>
                      <td colspan="2"><input type="password" name="new_password" value=""  class="inph_3" placeholder="새 비밀번호"></td>
                    </tr>
                    <tr>
                      <th colspan="2" bgcolor="#DFE6F7">비밀번호 확인</th>
                      <td colspan="2"><input type="password" name="new_password2" value=""  class="inph_3" placeholder="비밀번호 확인"></td>
                    </tr>
                </div>
                <div><tr><td colspan="4"><input type="submit" class="btn_3" value="저장"></td></tr></div>
</table>
            </form>
        </div>
    </main>
</body>
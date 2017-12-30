<meta charset="utf-8" />

<form method=post method=post action="input_result.php" enctype="multipart/form-data">
    <fieldset style="border:1 solid">
        <table align='center' text-align=center>
            <tr>
                <td text-align=center>제품 이름</td>
                <td text-align=center> <input type="text" name=pname> </td>
            </tr>
            <tr>
                <td colspan=2 text-align=center><br /><br />이미지 파일&nbsp;
                    <input type="file" name=pfile>
                </td>
            </tr>
            <tr>
                <td text-align=center>가격</td>
                <td text-align=center> <input type="text" name=price> </td>
            </tr>
            <tr>
                <td text-align=center>종류</td>
                <td text-align=center> <input type="text" name=category> </td>
            </tr>
            <tr>
                <td text-align=center>세부종류</td>
                <td text-align=center> <input type="text" name=decate> </td>
            </tr>
            <tr>
                <td text-align=center>재고</td>
                <td text-align=center> <input type="text" name=invent> </td>
            </tr>
<!--
            <tr>
                <td text-align=c enter>제목</td>
                <td text-align=c enter> <input type="text" name=title> </td>
            </tr>
-->
            <tr>
               <td text-align=center>설명</td>
                <td text-align=center><textarea rows="15" cols=55 name="pcomment"></textarea></td>
            </tr>
            
            <tr>
                <td colspan=2 text-align=center>
                    <input type="submit" name=submit value="등록">&nbsp;&nbsp;<input type="reset" name=reset value="리셋">
                </td>
            </tr>
        </table>
    </fieldset>
</form>

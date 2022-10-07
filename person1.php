<html>
<body>
<style>
p {display:inline-block; width:85px;}
</style>
<form action="insert1.php" method="post">
<p>번    호 : </p><input type="text" name="user_no"><br>
<p>아 이 디 : </p><input type="text" name="user_id"><br>
<p>이    름 : </p><input type="text" name="user_name"><br>
<p>전화번호 : </p><input type="text" name="user_phone"><br>
<p>주    소 : </p><input type="text" name="user_address"><br>
<input type="submit" value="회원가입"><br><br>
</form>

<select onchange="window.open(value,'_blank');">
<option>이동할 주소를 선택하세요</option>
<option value="http://1.0.0.51/table1.php/">테이블조회</option>
<option value="http://1.0.0.51/qurey1.php">질의</option>
<option value="http://1.0.0.51">메인</option>
<option value="https://1.0.0.51/db1.php/">database</option>
</select>

</body>
</html>
~            
<!DOCTYPE html>
<html>
<head>
<title>Form Đăng ký</title>
</head>
<style>
.container {
    width: 35%;
    margin: auto;
    border-radius: 5px;
    background-color: #74A8DC;
    padding: 20px;
}
select {
  background-color: white;
}
 input[type=button] {
  background-color: #0055A8;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
input[type=text] {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}
input[type=submit] {
  background-color: #0055A8;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
  
</style>
<body>
<div class="container">
<p>
<font face="Comic sans MS" size="8">Form Đăng Ký</font><br />
</p>
<form action ="formDK_post.php" method="post">
<p>
Họ và tên(*):<input type="text" name="name" id="name" placeholder="Nhập vào họ và tên"/>
</p>
<p>
Tên Đăng nhập(*):<input type="text" name="user" id= "user" placeholder=" Tên đăng nhập 8 ký tự trở lên" />
</p>
<p>
Password(*):<input type="text" name="Password" placeholder="Nhập password" />
</P>
<p>Nhập lại password(*):<input type="text" id="checkpassword" placeholder="Nhập lại password"/>
</p>
<p> Quốc tịch(*):
<select name="Nation">
<option value="Việt Nam" selected>Việt Nam</option>
<option value="Pháp">Pháp</option>
<option value="Đức">Đức</option>
<option value="Anh">Anh</option>
<option value="Mỹ">Mỹ</option>
</select>
</p>
<p>
Email(*): 
<input type="text" id="email" placeholder="abc@gmail.com" />
</p>
<p>Số điện thoại(*):<input type="text" id="phone" placeholder="Nhập số điện thoại"/></p>
<p> Câu hỏi bí mật (*):
<select id="question">
<option value="Cấp 1 bạn học trường nào?" selected>Cấp 1 bạn học trường nào?</option>
<option value="Bài hát bạn yêu thích?">Bài hát bạn yêu thích</option>
<option value="Bạn có thích đọc sách không?">Bạn có thích đọc sách không?</option>
<option value="Hãy kể 1 vài sở thich của bạn tại đây">Hãy kể 1 vài sở thích của bạn tại đây</option>
</select>
</p>
<p> Trả lời(*): <input type="text" id="answer" placeholder=" Nhập câu trả lời tại đây" /></p>
<hr>
<p>Vui lòng điền thông tin đầy đủ để đăng ký</p>
<input type="button" id="check" value="Kiểm tra" />
<input type="submit" id="submit" value="Đăng ký"  />
</form>
</body>
</div>
</head>
</html>

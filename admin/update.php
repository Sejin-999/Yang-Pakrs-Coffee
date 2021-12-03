<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Yang & Parks Join</title>
  <link href="/components/join.css" rel="stylesheet">
  <link href="/components/header.css" rel="stylesheet">
  <link href="/components/basic.css" rel="stylesheet">
</head>
<body>
  <header class="header">
  
    <a href="#" class="logo">
      <span id="logo-font">Yang & Parks</span>
    </a>
  
    <div class="action">
      
      <a href="/select.php" alt="#">수정페이지</a>
    </div>
  </header>

  <section id="join">

    <div class="jointitle">
      <span>회원 정보 수정</span>
    </div>

    <form action="/selectSuccess.php" method="post">
      <div class="container">
        <div class="join_box">
          <input type="text" name="M_num" id="M_num" placeholder="UserId">
          <div class="war_be">
            <span> ID : 6 ~ 12 </span>
          </div>
        </div>

          <div class="join_box">
            <input type="text" name="M_name" id="M_name" placeholder="UserName">
            <div class="war_be">
              <span> 이름을 입력해주세요 </span>
            </div>
          </div>

        <div class="join_box">
            <input type="password" name="M_password" id="M_password" placeholder="UserPass">
          <div class="war_be">
            <span> Password : 8~12 + 영문,숫자가 적어도 한개이상 들어가야합니다.</span>
          </div>
        </div>

        <div class="join_box">
          <input type="password" name="password2" id="password2" placeholder="check Pass">
          <div class="war_be">
            <span> 비밀번호를 한번더 입력해주세요! </span>
          </div>
        </div>

        <div class="join_box">
          
          <div class="join_box__add">
            <input type="text" name="M_address1" id="M_address1" placeholder="집주소">
            <input type="text" name="M_address2" id="M_address2" placeholder="상세주소">
            <div id="join_add_ch">
              <button type="submit" onclick="checkadd()">Check</button>
            </div>
          </div>
        </div>

      </div>
      <button class="join_btn"type="submit">회원정보수정</button>
    </form>

  </section>
  <script src="js/join.js"></script>
</body>
</html>
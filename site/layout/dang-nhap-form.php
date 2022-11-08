<!DOCTYPE html>
<style>
  .ma_kh {
    appearance: none;
    outline: 0;
    border: 1px solid rgba(255, 255, 255, 0.4);
    background-color: rgba(255, 255, 255, 0.2);
    width: 250px;
    border-radius: 3px;
    display: block;
    text-align: center;
    font-size: 18px;
    color: white;
    transition-duration: 0.25s;
    font-weight: 300;
  }

  .ma_kh:hover {
    background-color: rgba(255, 255, 255, 0.4);
  }

  .ma_kh:focus {
    background-color: white;
    width: 300px;
    color: #53e3a6;
  }

  form button {
    appearance: none;
    outline: 0;
    background-color: white;
    border: 0;
    padding: 10px 15px;
    color: #53e3a6;
    border-radius: 3px;
    width: 250px;
    cursor: pointer;
    font-size: 18px;
    transition-duration: 0.25s;
  }

  form button:hover {
    background-color: #f5f7f9;
  }

  .check-box {
    width: 20px;
    height: 20px;
  }

  .check-box:focus {
    background-color: #53e3a6;
    height: 20px;
    width: 20px;
  }
.menu_dangnhap{
  list-style:none;
}

.menu_dangnhap li{
margin-top: 5px;

}
.menu_dangnhap li a {
  text-decoration: none;
  color: #f5f7f9;
  font-size: 20px;
}
.menu_dangnhap li a:hover{
  text-decoration: underline;
}
</style>
<html>

<body>
  <div>
    <h1 style="margin:0px">Sign In</h1>
    <div>
      <form action="<?= $SITE_URL ?>/tai-khoan/dang-nhap.php" method="post">    
        <input class="ma_kh" name="ma_kh" value="<?= $ma_kh ?>">
        <input class="ma_kh" name="mat_khau" type="password" value="<?= $mat_khau ?>">
        <div>
          <div style="display:flex;width:350px;margin-left:120px">
            
              Remember ?
              <input name="ghi_nho" type="checkbox" checked style="width:15px;height:15px" >
            
          </div>
        </div>
        <div>
          <button name="btn_login">Đăng nhập</button>
        </div>
        <div class="menu_dangnhap">
          <li><a href="<?= $SITE_URL ?>/tai-khoan/quen-mk.php">Forgot password</a></li>
          <li>Don't have Account? <a style="color:red;font-weight:bold" href="<?= $SITE_URL ?>/tai-khoan/dang-ky.php">Join free today</a></li>
          
        </div>
      </form>
    </div>
  </div>
</body>

</html>
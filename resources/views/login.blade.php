
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<style>
    img{
	width: 100%;
}
.login {
    height: 1000px;
    width: 100%;
    background: radial-gradient(#4884c8, #3f8ae0);
    position: relative;
}
.login_box {
    width: 1050px;
    height: 600px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    background: #fff;
    border-radius: 10px;
    box-shadow: 1px 4px 22px -8px #0004;
    display: flex;
    overflow: hidden;
}
.login_box .left{
  width: 41%;
  height: 100%;
  padding: 25px 25px;
  
}
.login_box .right{
  width: 59%;
  height: 100%  
}
.left .top_link a {
    color: rgb(73, 107, 162);
    font-weight: 400;
    text-decoration: none;
}

.left .top_link{
  height: 20px
}
.left .contact{
	display: flex;
    align-items: center;
    justify-content: center;
    align-self: center;
    height: 100%;
    width: 73%;
    margin: auto;
}
.left h3{
  text-align: center;
  margin-bottom: 40px;
}
.left input {
    border: none;
    width: 80%;
    margin: 15px 0px;
    border-bottom: 1px solid #4884c8;
    padding: 7px 9px;
    width: 100%;
    overflow: hidden;
    background: transparent;
    font-weight: 600;
    font-size: 14px;
}
.left{
	background: linear-gradient(-45deg, #dcd7e0, #fff);
}
.submit {
    border: none;
    padding: 15px 70px;
    border-radius: 8px;
    display: block;
    margin: auto;
    margin-top: 120px;
    background: #4884c8;
    color: #fff;
    font-weight: bold;
    -webkit-box-shadow: 0px 9px 15px -11px rgb(155, 217, 255);
    -moz-box-shadow: 0px 9px 15px -11px rgb(155, 217, 255);
    box-shadow: 0px 9px 15px -11px rgb(155, 217, 255);
}



.right {
	background: linear-gradient(212.38deg, rgba(73, 107, 162, 0.7) 0%, rgba(155, 217, 255, 0.71) 100%),url(https://static.seattletimes.com/wp-content/uploads/2019/01/web-typing-ergonomics-1020x680.jpg);
	color: #fff;
	position: relative;
}

.right .right-text{
  height: 100%;
  position: relative;
  transform: translate(0%, 45%);
}
.right-text h2{
  display: block;
  width: 100%;
  text-align: center;
  font-size: 50px;
  font-weight: 500;
}
.right-text h5{
  display: block;
  width: 100%;
  text-align: center;
  font-size: 19px;
  font-weight: 400;
}

.right .right-inductor{
  position: absolute;
  width: 70px;
  height: 7px;
  background: #fff0;
  left: 50%;
  bottom: 70px;
  transform: translate(-50%, 0%);
}
.top_link img {
    width: 28px;
    padding-right: 7px;
    margin-top: -3px;
}




</style>
<body>
	<section class="login">
		<div class="login_box">
			<div class="left">
				<div class="top_link"><a href="#"><img src="https://drive.google.com/u/0/uc?id=16U__U5dJdaTfNGobB_OpwAJ73vM50rPV&export=download" alt="">Kembali</a></div>
				<div class="contact">
					<form action="login" method="POST">
                        @csrf
						<h3>Login Admin</h3>
						<input type="email" name="email" placeholder="EMAIL" required>
						<input type="password" name="password" placeholder="PASSWORD" required>
						<button class="submit">Login</button>
					</form>
				</div>
			</div>
			<div class="right">
				<div class="right-text">
					<h2>ADMIN</h2>
					<h5>PPG UNESA</h5>
				</div>
			</div>
		</div>
	</section>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        @if(session('emptyEmail'))
        Swal.fire({
                icon: 'error',
                title: 'Email tidak terdaftar',
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 1500,
                timerProgressBar: true,
            }).then(function() {
                // Reload halaman setelah menutup SweetAlert
                location.reload();
            });
        @endif
        @if(session('emptyPassword'))
        Swal.fire({
                icon: 'error',
                title: 'Password anda salah',
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 1500,
                timerProgressBar: true,
            }).then(function() {
                // Reload halaman setelah menutup SweetAlert
                location.reload();
            });
        @endif
    </script>
</body>
</html>
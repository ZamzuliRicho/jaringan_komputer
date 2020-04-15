<?php
						include"koneksi.php";
						$err="";
						if (isset($_POST['login'])&&$_POST['login']=='LOGIN') {
							$email = $_POST['email'];
							$pass = $_POST['pass'];

							$query = mysqli_query($koneksi, "select * form regis where email = '$email' and pass ='$pass'");

							$data = mysqli_fetch_assoc($query);
								if (mysqli_num_rows($query)>0) {
									session_start();

									$_SESSION['email'] = $data['email'];
									$_SESSION['login'] = true;

									header('location:')
								}
								else{
									echo "<script>alert('email atau passowrd salah!!')</script>";
								}
}?>
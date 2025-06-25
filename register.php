<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Daftar Akun - EXJO</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            background-color: #f4f5f7;
        }

        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-form {
            background: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 450px;
        }

        .login-form .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .login-form .logo img {
            max-width: 150px;
        }

        .login-form h3 {
            text-align: center;
            margin-bottom: 30px;
            color: #040E27;
        }

        .form-control {
            height: 50px;
            border-radius: 5px;
        }

        .boxed-btn3 {
            width: 100%;
            text-transform: uppercase;
        }

        body {
            background-color: #f4f5f7;
        }

        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px 0;
        }

        .login-form {
            background: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 450px;
        }

        .login-form .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .login-form .logo img {
            max-width: 150px;
        }

        .login-form h3 {
            text-align: center;
            margin-bottom: 30px;
            color: #040E27;
        }

        .login-form .form-control {
            width: 100%;
            height: 50px;
            border: 1px solid #e5e6e9;
            border-radius: 5px;
            background-color: #f8f9fa;
            padding-left: 20px;
            font-size: 16px;
            transition: border-color 0.3s ease;
            margin-bottom: 15px;
        }

        .login-form .form-control:focus {
            border-color: #17A295;
            box-shadow: none;
            background-color: #fff;
        }

        .boxed-btn3 {
            width: 100%;
            text-transform: uppercase;
            background: #17A295;
            color: #fff;
            display: block;
            padding: 12px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="login-form">
            <div class="logo">
                <img src="img/logo.png" alt="EXJO Logo">
            </div>
            <h3>Buat Akun Baru</h3>

            <?php if (isset($_GET['error'])) {
                echo '<div class="alert alert-danger">' . htmlspecialchars($_GET['error']) . '</div>';
            } ?>

            <form action="register_process.php" method="POST">
                <div class="form-group">
                    <input type="text" name="first_name" class="form-control" placeholder="Nama Depan" required>
                </div>
                <div class="form-group">
                    <input type="text" name="last_name" class="form-control" placeholder="Nama Belakang">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div>
                <div>
                    <div class="form-group">
                        <input type="text" name="phone" class="form-control" placeholder="Nomor Telepon (08xxxxxxxxxx)"
                            required>
                    </div>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <input type="password" name="confirm_password" class="form-control"
                        placeholder="Konfirmasi Password" required>
                </div>
                <button type="submit" class="boxed-btn3">Daftar</button>
            </form>
            <div class="text-center mt-4">
                <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>
            </div>
        </div>
    </div>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function () {
            const urlParams = new URLSearchParams(window.location.search);

            if (urlParams.has('status')) {
                const status = urlParams.get('status');
                const error = urlParams.get('error');
                const brandColor = '#1EC6B6';

                let title, text, icon;

                if (status === 'sukses') {
                    title = 'Berhasil!';
                    text = 'Aksi Anda telah berhasil diproses.';
                    icon = 'success';
                } else {
                    title = 'Oops... Terjadi Kesalahan';
                    text = error || 'Silakan periksa kembali isian Anda dan coba lagi.';
                    icon = 'error';
                }

                if (window.location.pathname.includes('reservasi.php') && status === 'sukses') {
                    text = 'Terima kasih, reservasi Anda telah kami terima dan akan segera diproses.';
                }

                Swal.fire({
                    icon: icon,
                    title: title,
                    text: text,
                    confirmButtonColor: brandColor
                });

                window.history.replaceState({}, document.title, window.location.pathname + window.location.hash);
            }
        });
    </script>   
</body>

</html>
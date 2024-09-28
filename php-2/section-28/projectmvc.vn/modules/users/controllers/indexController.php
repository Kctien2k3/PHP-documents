<?php


function construct()
{ // có phạm vi hoạt động trên toàn bộ action còn lại
//    echo "DÙng chung, load đầu tiên";
    load_model('index');
    load('lib', 'validation');
}

function regAction()
{
    global $error, $username, $password, $fullname, $email;
    if (isset($_POST['btn_reg'])) {
        $error = array();
        // tạo hàm check fullname
        if (empty($_POST['fullname'])) {
            $error['fullname'] = "your fullname is empty!";
        } else {
            $fullname = $_POST['fullname'];
        }
        // tạo hàm check username 
        if (empty($_POST['username'])) {
            $error['username'] = "your username is empty!";
        } else {
            if (!is_username($_POST['username'])) {
                $error['username'] = "tên đăng nhập không đúng định dạng!";
            } else {
                $username = $_POST['username'];
            }
        }
        // tạo hàm check password
        if (empty($_POST['password'])) {
            $error['password'] = "your password is empty!";
        } else {
            if (!is_password($_POST['password'])) {
                $error['password'] = "mật khẩu không đúng định dạng!";
            } else {
                $password = md5($_POST['password']);
            }
        }
        // tạo hàm check email 
        if (empty($_POST['email'])) {
            $error['email'] = "your email is empty!";
        } else {
            if (!is_email($_POST['email'])) {
                $error['email'] = "email không đúng định dạng";
            } else {
                $email = $_POST['email'];
            }
        }


        // kết luận 
        if (empty($error)) {
            if (!user_exists($username, $email)) {
                $active_token = md5($username . time());
                $data = array(
                    'fullname' => $fullname,
                    'email' => $email,
                    'username' => $username,
                    'password' => $password,
                    'active_token' => $active_token
                );
                add_user($data);
                $link_active = base_url("?mod=users&action=active&active_token={$active_token}");
                $content = "<p>chào bạn {$fullname}</p>
                <p>bạn vui lòng click vào đường link này để kích hoạt tài khoản!: {$link_active}</p>
                <p>nếu ko phải bạn đăng ký tài khoản này thì hãy bỏ qua email này!</p>
                <p>team-suport-kc.vn</p>";
                echo send_mail('kenkc1999@gmail.com', "Kc tiến", 'kích hoạt tài khoản PHP MASTER', $content);

                // chuyển hướng khi đăng ký thành công!
                redirect("?mod=users&action=login");
            } else { // thông báo 
                $error['account'] = "Email hoặc Username đã tồn tại trên hệ thống!";
            }
        }
    }
    load_view('reg'); ///// phần này quang trọng vì sẽ load trang reg lên hệ thống
}


function loginAction()
{
    global $error, $username, $password;
    if (isset($_POST['btn_login'])) {
        $error = array();
        // kiểm tra username
        if (empty($_POST['username'])) {
            $error['username'] = "your username is empty!";
        } else {
            if (!is_username($_POST['username'])) {
                $error['username'] = "tên đăng nhập không đúng định dạng!";
            } else {
                $username = $_POST['username'];
            }
        }

        // kiểm tra password
        if (empty($_POST['password'])) {
            $error['password'] = "your password is empty!";
        } else {
            if (!is_password($_POST['password'])) {
                $error['password'] = "mật khẩu không đúng định dạng!";
            } else {
                $password = md5($_POST['password']);
            }
        }

        // kết luận 
        if (empty($error)) {
            if (check_login($username, $password)) {
                //lưu trữ phiên đăng nhập 
                $_SESSION['is_login'] = true;
                $_SESSION['user_login'] = $username;
                // chuyển hướng vào hệ thống 
                redirect();
            } else {
                $error['account'] = "tên đăng nhập hoặc mật khẩu không tồn tại!";
            }
        }
    }
    load_view('login');
}

/// tạo logout 
function logoutAction()
{
    unset($_SESSION['is_login']);
    unset($_SESSION['user_login']);
    redirect("?mod=users&action=login");
}



// tạo active email
function activeAction()
{
    $active_token = $_GET['active_token'];
    if (check_active_token($active_token)) {
        active_user($active_token);
        $link_login = "?mod=users&action=login";
        echo "bạn đã đăng nhập thành công, xin vui lòng nhấn vào link sau để login: <a href='{$link_login}'>login again!</a>";
    } else {
        echo "yêu cầu kích hoạt không hợp lệ";
    }
}



//////////////// phần về reset password
function resetAction()
{
    global $error, $username, $password;
    $reset_token = $_GET['reset_token'];
    if (!empty($reset_token)) {
        if (check_reset_token($reset_token)) {
            if (isset($_POST['btn-new-pass'])) {
                $error = array();
                // kiểm tra password
                if (empty($_POST['password'])) {
                    $error['password'] = "your password is empty!";
                } else {
                    if (!is_password($_POST['password'])) {
                        $error['password'] = "mật khẩu không đúng định dạng!";
                    } else {
                        $password = md5($_POST['password']);
                    }
                }
                // kết luận
                if (empty($error)) {
                    $data = array(
                        'password' => $password,
                    );
                    // cập nhật data hay còn gọi là cập nhật lại mật khẩu vào sql
                    update_pass($data, $reset_token);
                    // chuyển hướng đến trang thống báo thành công đổi mk
                    redirect("?mod=users&action=resetok");
                }
            }
            load_view('newpass');
        } else {
            echo "yêu cầu lấy lại mật khẩu không hợp lệ!";
        }
    } else { // không tồn tại phần tử reset_token thì quay lại làm việc với trang kiểm tra gmail
        if (isset($_POST['btn_reset'])) {
            $error = array();

            // kiểm tra email
            if (empty($_POST['email'])) {
                $error['email'] = "your email is empty!";
            } else {
                if (!is_email($_POST['email'])) {
                    $error['error'] = "email không đúng định dạng";
                } else {
                    $email = $_POST['email'];
                }
            }

            // kết luận
            if (empty($error)) {
                if (check_email($email)) {
                    $reset_token = md5($email . time());
                    $data = array(
                        'reset_token' => $reset_token,
                    );
                    // cập nhật mã reset pass cho user cần khôi phục mật khẩu 
                    update_reset_token($data, $email);
                    // gửi link khôi phục vào email người dùng
                    $link = base_url("?mod=users&action=reset&reset_token={$reset_token}");
                    $content = "<p>bạn vui lòng click vào link sau đây để khôi phục mật khẩu!: {$link}</p>
                    <p>nếu không phài là yêu cầu của bạn, vui lòng bỏ qua email này!</p>
                    <p>kc team support!</p>";


                    echo send_mail($email, 'kc Tien', 'khôi phục mật khẩu PHP MASTER', $content);

                } else {
                    $error['account'] = "Email này không tồn tại trên hệ thống!";
                }
            }

        }
    }

    load_view('reset');
}

function resetokAction()
{
    load_view('resetok');
}
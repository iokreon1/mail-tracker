<?php 

require_once __DIR__ . "/../cores/controller.php";

class AuthController extends Controller
{
    public function index()
    {
        $data = [
            'title' => "Login"
        ];
        return $this->view('auth/login', $data);
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';

            $result = $this->model('UsersModel')->getUser($username, $password);

            if ($result['success']) {
                $_SESSION['user'] = $result['user'];
                header('Location: ' . BASEURL . 'DashboardController');
                exit();
            } else {
                $error_message = $result['message'];
                return $this->view('auth/login');
            }
        } else {
            return $this->view('auth/login');
        }
    }
}
<?php 
    class Posts extends Controller {
        public function __construct(){
            // If we're not logged in
            if(!isLoggedIn()){
                // redirect to login page
                redirect('users/login');
            }

            $this->postModel = $this->model('Post');
        }

        public function index(){
            // Get posts
            $posts = $this->postModel->getPosts();

            $data = [
                'posts' => $posts
            ];
            $this->view('posts/index', $data);
        }

        public function add(){
            $data = [
                'title' => '',
                'body' => ''
            ];
            $this->view('posts/add', $data);
        }
    }
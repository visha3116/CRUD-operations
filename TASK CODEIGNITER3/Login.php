<?php
class Login extends CI_Controller {
    public function update(){
        extract($_POST);
        $id=$stid;
        $data=[
            'student_name'=>$stname,
            'student_dob'=>$stdob
        ];
        $this->load->model('loginModel');
        $result = $this->loginModel->updateData($data,$id);
        if($result){
            $this->fetchdata();
        }
    }
    public function edit($id){
        $this->load->model('loginModel');
        $result['data']= $this->loginModel->editdata($id);
        $this->load->view('login_records',$result);
    }
    public function college(){
        $mes['msg']='College Login Page';
        $this->load->view('login_page',$mes);
    }

    public function savedata(){
        extract($_POST);
        //$stname;
        $data = [
            'student_name'=>$stname,
            'student_dob'=>$stdob
        ];

        $this->load->model('loginModel');
        //$this->loginModel->insertdata($data);
       $result = $this->loginModel->insertdata($data);

       if($result){
            $res['status']='You have successfully logged in';
            $res['test']='Thank you';
        //redirect(base_url('register/student'));
            $this->load->view('login_page',$res);
            //redirect('http://localhost/ci3/login/college');
            //redirect(base_url('login/college'));
        }else{
            echo 'error';
        //$res['status']='ERROR while inserting data';
            //$this->load->view('login_page');
        }
    }
    public function fetchdata(){
        $this->load->model('loginModel');
        $result['table'] = $this->loginModel->getRecord();
        $this->load->view('login_records',$result);
    }

}
//http://localhost/ci3/login/fetchdata
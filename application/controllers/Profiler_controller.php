<?php 

    class Profiler_controller extends CI_Controller{
        function index(){
            // $this->benchmark->mark('code_start');
            // $this->benchmark->mark('code_end');

            // echo $this->benchmark->elapsed_time('code_start', 'code_end');
            $this->output->enable_profiler(TRUE);
            $this->load->view('test');
        }
        function disable(){
            $this->output->enable_profiler(FALSE); 
            $this->load->view('test');
        }
    }

?>
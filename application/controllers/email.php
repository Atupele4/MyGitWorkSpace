<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class email extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {



        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.gmail.com',
            'smtp_port' => 465,
            'smtp_user' => 'test4like@gmail.com',
            'smtp_pass' => 'qwert$Q$',
            'mailtype' => 'html'
        );

        $subject = 'Room Reservation';
        $email = 'atupelemboya@gmail.com';



        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");

        $this->email->from('test4like@gmail.com');
        $this->email->to($email);
        $this->email->subject($subject);
        $this->email->message('Sent Message');

        /*$path = '';
          $file_name = $path;

          $this->email->attach($file_name);
  */


        if($this->email->send())
        {
           // $this->index();
            echo "Message sent";
        }
        else{
            echo "Message not sent";
        }


    }




}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
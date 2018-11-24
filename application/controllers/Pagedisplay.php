<?php
class Pagedisplay extends CI_Controller 
{
    public function __construct() {
        parent:: __construct();
        $this->load->helper("url");
        $this->load->model("PageModel");
        $this->load->library("pagination");
    }

    public function example1() {
        $config = array();
        $config["base_url"] = base_url() ."index.php/Pagedisplay/example1";
        $config["total_rows"] = $this->PageModel->record_count();
        $config["per_page"] = 10;
        $config["uri_segment"] = 3;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results"] = $this->PageModel->
            fetch_countries($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();

        $this->load->view("example1", $data);
    }
}
?>
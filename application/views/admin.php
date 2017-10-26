<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('admin/header');
$this->load->view('admin/'.$template);
$this->load->view('admin/footer');
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->helper('url');
      $this->load->database('default');
   }

   public function index()
   {
      $data['title'] = 'Home';
      $this->load->view('base/header', $data);
      $this->load->view('base/navbar', $data);
      $this->load->view('public/home/index');
      $this->load->view('base/footer');
   }

   // alternative route : home/terms
   public function terms()
   {
      $data['title'] = 'Terms';
      $this->load->view('base/header', $data);
      $this->load->view('base/navbar', $data);
      $this->load->view('public/terms/V_terms');
      $this->load->view('base/footer');
   }

   // home/contacts
   public function contacts()
   {
      $data['title'] = 'Contact';
      $this->load->view('base/header', $data);
      $this->load->view('base/navbar', $data);
      $this->load->view('public/contact/V_contact');
      $this->load->view('base/footer');
   }

   // home/blogs
   public function blogs()
   {
      $data['title'] = 'About Us';
      $this->load->view('base/header', $data);
      $this->load->view('base/navbar', $data);
      $this->load->view('public/about/V_about');
      $this->load->view('base/footer');
   }

   // home/events
   public function events()
   {
      $this->load->model('Events_model', 'eventModel');
      $data['title'] = 'Events';
      $data['event'] = $this->eventModel->get_event();
      $this->load->view('base/header', $data);
      $this->load->view('base/navbar', $data);
      $this->load->view('public/news/V_news', $data);
      $this->load->view('public/news/news-js', $data);
      $this->load->view('base/footer');
   }
}

<?php

namespace App\Controller;

class ContactsController extends AppController
{
    public function initialize()
    {
        parent::initialize();
    }

    public function index()
    {
        $this->pageTitle = __('Contact Us');
    }
}

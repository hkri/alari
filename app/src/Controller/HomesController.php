<?php

namespace App\Controller;

use Cake\Event\Event;
use Cake\Network\Email\Email;

class HomesController extends AppController {

    /**
     * Alari homes homepage
     */
    public function index() {
    }

    /**
     * Alari Drafting and architectural design service
     */
    public function dda() {
    }

    /**
     * Alari homes Our Team
     */
    public function our_team() {
    }

    /**
     * Alari homes Plans and Permit
     */
    public function plans_permits() {
    }

    /**
     * Alari homes Gallery
     */
    public function gallery() {
    }

    /**
     * Alari homes Contact
     */
    public function contact() {
        if ($this->request->is('post')) {
            //Send email to admin after saving the inquiry
            $data = [];
            $data['from'] = $this->request->data['FullName'];
            $data['email'] = $this->request->data['Email'];
            $data['message'] = $this->request->data['Message'];
            $email = new Email('default');
            $email->template('inquiry')
                ->emailFormat('text')
                ->subject('Inquiry')
                ->to('blakeyoon@yahoo.com')
                ->viewVars($data)
                ->send();
            $this->Flash->set('Your inquiry has been sent successfully.');
            return $this->redirect(['action' => 'contact']);
        }
    }
}

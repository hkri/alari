<?php

namespace App\Controller;

use Cake\Event\Event;
use Cake\Network\Email\Email;

class FabricationController extends AppController {

    /**
     * Alari Fabrication homepage
     */
    public function index() {
    }
    /**
     * Alari Fabrication Our Team
     */
    public function our_team() {
    }

    /**
     * Alari Fabrication Shop Drawings
     */
    public function shop_drawings() {
    }

    /**
     * Alari Fabrication Gallery
     */
    public function gallery() {
    }

    /**
     * Alari Fabrication Contact
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
                ->to('renegade.cipher@gmail.com') //DUMMY implementation for email
                ->viewVars($data)
                ->send();
            $this->Flash->set('Your inquiry has been sent successfully.');
            return $this->redirect(['action' => 'contact']);
        }
    }
}

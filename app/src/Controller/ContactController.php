<?php

namespace App\Controller;

use Cake\Event\Event;
use Cake\Network\Email\Email;

abstract class ContactController extends AppController {

    public function initialize() {
        parent::initialize();
    }

    /**
     * Alari Contact
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
                ->to(OWNER_EMAIL)
                ->viewVars($data)
                ->send();
            $this->Flash->success('Your inquiry has been sent successfully.');
            return $this->redirect(['action' => 'contact']);
        }
    }
}

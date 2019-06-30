<?php 
App::uses('AppController', 'Controller');


class CommentController extends AppController {
    
   public function add() {

        if ($this->request->is('post')) {
            $this->Comment->create();
            if ($this->Comment->save($this->request->data)) {
                $this->Flash->success(__('The comment has been saved'));
                $post_id = $this->request->data['Comment']['post_id'];     
                return $this->redirect(
                  array('controller' => 'posts', 'action' => 'view',$post_id )
                );
            }
            $this->Flash->error(
                __('The comment could not be saved. Please, try again.')
            );
        }
     }
}
   
?>
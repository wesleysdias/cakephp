<?php 	
	class PostsController extends AppController {

		public $helpers = array ('Html','Form');
    	public $name = 'Posts';		

		public function index() {
        		$this->set('posts', $this->Post->find('all')); 	
        	}

        public function view($id = null) {
        		$this->Post->id = $id;
        		$this->set('post', $this->Post->read());
    		}
    		//rotina de inserção
    	public function add() {
        	if ($this->request->is('post')) {
            	if ($this->Post->save($this->request->data)) {
                	$this->Session->setFlash('Seus Post foi salvo.');
                	$this->redirect(array('action' => 'index'));
            	}
        	}
    	}
    	//rotina de edição
    	function edit($id = null) {
		    $this->Post->id = $id;
		    if ($this->request->is('get')) {
		        $this->request->data = $this->Post->read();
		    } else {
		        if ($this->Post->save($this->request->data)) {
		            $this->Session->setFlash('Seus Post foi atualizado.');
		            $this->redirect(array('action' => 'index'));
		        }
		    }		
    	}
    	//rotina de esclusão
    	function delete($id) {
		    if (!$this->request->is('post')) {
		        throw new MethodNotAllowedException();
		    }
		    if ($this->Post->delete($id)) {
		        $this->Session->setFlash('O Post com o ID: ' . $id . ' foi excluído.');
		        $this->redirect(array('action' => 'index'));
		    }
		}
}

 ?>
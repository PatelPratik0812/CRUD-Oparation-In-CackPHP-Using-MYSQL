<?php
    namespace App\Controller;
    use App\Controller\AppController;

    class PostsController extends AppController{

        public function index(){
            $this->set('posts',$this->Posts->find('all'));
        }

        public function add(){
            $post=$this->Posts->newEntity();
            if($this->request->is('post')){
                $post=$this->Posts->patchEntity($post,$this->request->getData());
                if($this->Posts->save($post)){
                    $this->Flash->success('Post Added Successfully!!',['key'=>'message']);
                    return $this->redirect(['action'=>'index']);
                }
                $this->Flash->error(__('Unable to add your post'));
            }
            $this->set('post',$post);
        }

        public function view($ID = null){
            $posts= $this->Posts->get($ID);
            $this->set('post',$posts);
        }

        public function edit($ID=null){
           $User=$this->Posts->get($ID);
           if($this->request->is(['post','put','patch'])){
            $User = $this->Posts->patchEntity($User, $this->request->data);
            if($this->Posts->save($User)){
                echo "hello3";
                $this->Flash->Success('Post Update Successfully!!!',['key'=>'message']);
                return $this->redirect(['action'=>'index']);
            }
            $this->Flash->error(__('Unable to update post'));
           }
           $this->set('User',$User);
        }

        public function delete($ID = null){
            $this->request->allowMethod(['post','delete']);
            $post=$this->Posts->get($ID);
            if($this->Posts->delete($post)){
                $this->Flash->success('Post Deleted SuccessFully!!!',['key'=>'Message']);
                return $this->redirect(['action'=>'index']);
            }
        }
    }
?>
<!--update record Second method -->
<!-- ['FirstName'=>$User->FirstName],['ID'=>$User->ID],
            ['Title'=>$User->Title],['Email'=>$User->Email] -->
<!-- https://www.youtube.com/watch?v=pCB5ShwtHdw ph-8000084604 -->
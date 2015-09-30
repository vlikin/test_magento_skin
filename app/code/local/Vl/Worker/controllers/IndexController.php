<?php

class Vl_Worker_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }

    public function testModelAction() {
        $params = $this->getRequest()->getParams();
        $blogpost = Mage::getModel('vl_worker/blogpost');
        echo get_class($blogpost) . '<br />';
        var_dump($blogpost);

        echo("Loading the blogpost with an ID of " . $params['id']);
        $blogpost->load($params['id']);
        $data = $blogpost->getData();
        var_dump($data);
    }

    public function createNewPostAction() {
        $blogpost = Mage::getModel('vl_worker/blogpost');
        $blogpost->setTitle('Code Post!');
        $blogpost->setPost('This post was created from code!');
        $blogpost->save();
        echo 'post created';
    }

    public function showAllBlogPostsAction() {
        $posts = Mage::getModel('vl_worker/blogpost')->getCollection();
        foreach($posts as $blog_post){
            echo '<h3>'.$blog_post->getTitle().'</h3>';
            echo nl2br($blog_post->getPost());
        }
    }

}
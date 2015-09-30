<?php

class Vl_Worker_Block_Youtube extends Mage_Core_Block_Template implements Mage_Widget_Block_Interface {

    protected function _11toHtml() {
        $video_id = $this->getVideoId();

        $html = '<iframe width="420" height="315" src="https://www.youtube.com/embed/' . $video_id . '" frameborder="0" allowfullscreen></iframe>';
        return $html;
    }
}
<?php

function instamotors_preprocess_page(&$variables) {
  if($variables['is_front']){
    unset($variables['page']['content']['system_main']);
  }
}

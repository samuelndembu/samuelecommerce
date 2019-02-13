<?php 
class Site_Model extends CI_Model
{
public function display_page_title()
  {
$page=explode("/",uri_string());
$total= count($page);
$last=$total-1;
$name=$this->site_model->decode_web_name($page[$last]);
if(is_numeric($name))
    {
$last=$last-1;
$name=$this->site_model->decode_web_name($page[$last]);
    }
$page_url=ucwords(strtolower($name));
return$page_url;
  }
}
<?php
namespace content\candida;


class view extends \mvc\view
{
	public function config()
	{
		$this->data->page['title'] = T_('All Candidates of Presidential Elections of Islamic Republic of Iran');
		$this->data->page['desc']  = T_('Review all candidates details');
		$this->data->result        = \lib\candidas::get_list_all('president');
	}
}
?>
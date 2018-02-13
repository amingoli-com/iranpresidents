<?php
namespace content\admin\election;

class controller extends \content\main\controller
{
	/**
	 * route election
	 */
	public function _route()
	{
		parent::_route();

		$this->access('election:admin:admin', 'block');

		$this->get("list", "list")->ALL();
		$this->get("election", "election")->ALL("/admin\/election\/edit=(\d+)/");

		$this->post('election')->ALL();
		$this->post("edit")->ALL("/admin\/election\/edit=(\d+)/");
	}
}
?>
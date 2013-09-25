<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_itembox extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'item_id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'item_title' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			'item_description' => array(
				'type' => 'TEXT',
				'null' => TRUE,
			),
			'item_height' => array(
				'type'=>'INT',
				'constraint'=>5,
				'unsigned'=> TRUE
			),
			'item_width' => array(
				'type'=>'INT',
				'constraint'=>5,
				'unsigned'=> TRUE
			),
			'item_length' => array(
				'type'=>'INT',
				'constraint'=>5,
				'unsigned'=> TRUE
			),
			'item_weight' => array(
				'type'=>'INT',
				'constraint'=>5,
				'unsigned'=> TRUE
			)
		));
		$this->dbforge->add_key('item_id');
		$this->dbforge->create_table('itembox');
	}

	public function down()
	{
		$this->dbforge->drop_table('itembox');
	}
}
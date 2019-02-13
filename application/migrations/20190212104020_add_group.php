  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_group extends CI_Migration
{
public function up()
{
    $this->dbforge->add_field(array(
        'group_id'=>array(
            'type'=> 'INT',
            'constraint'=> 5,
            'unsigned' => TRUE,
            'auto_increment'=> TRUE
        ),
        'group_name'=>array(
            'type'=> 'TEXT',
            'constraint'=> '100',

        ),
        'group_description' =>array(
            'type'=> 'text',
            'constraint'=>100
        ),
        'number_of_friends' =>array(
            'type'=> 'date',
            'default'=>current_temestamp,
        ),
         'date_created' =>array(
            'type'=> 'date',
            'default'=>current_temestamp,
        ),
          ));
        $this->dbforge->add_key('group_id', TRUE);
        $this->dbforge->create_table('group_table');
}
	public function down(){
        $this->dbforge->drop_table('group_table');
    }
}
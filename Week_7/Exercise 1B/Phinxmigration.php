<?php
use Phinx\Migration\AbstractMigration;

class CreateMonsterTable extends AbstractMigration
{   
    // Define a monster table and columns
    public function up()
    {
        $table = $this->table('monster', ['id' => true]);
        $table->addColumn('Name', 'string', ['limit' => 20, 'null' => false])
              ->addColumn('Image', 'blob', ['null' => false])
              ->addColumn('Audio', 'blob', ['null' => false])
              ->addIndex(['Name'], ['unique' => true])
              ->create();
    }
    
    //rollback 
    public function down()
    {
        $this->table('monster')->drop()->save();
    }
}
?>
<!-- This will execute the up() method of the CreateMonsterTable migration and create the 
vendor/bin/phinx migrate -c phinx.php -->



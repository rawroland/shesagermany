<?php

use Phinx\Migration\AbstractMigration;

class UpdateParticipantAssociations extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     *
     * Uncomment this method if you would like to use it.
     *
    public function change()
    {
    }
    */
    
    /**
     * Migrate Up.
     */
    public function up() {
        $participants = $this->table('participants');
        $participants->changeColumn('project_id', 'integer', ['null' => true])
            ->changeColumn('activity_id', 'integer', ['null' => true]);
    }

    /**
     * Migrate Down.
     */
    public function down(){
        $participants = $this->table('participants');
        $participants->changeColumn('project_id', 'integer', ['null' => false])
            ->changeColumn('activity_id', 'integer', ['null' => false]);
    }
}
<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class Infos extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $table = $this->table('infos');
        $table->addColumn('telefone', 'integer', ['null' => false]);
        $table->addColumn('email', 'string', ['null' => false]);
        $table->addColumn('pessoasid', 'integer');
        $table->addForeignKey('pessoasid', 'pessoas', 'id', ['delete' => 'CASCADE']);
        $table->create();
    }
}

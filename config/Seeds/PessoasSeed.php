<?php

declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Pessoas seed.
 */
class PessoasSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run(): void
    {
        $data = [
            [
                'nome'    => 'foo',
                'sobrenome' => 'bar',
            ],
            [
                'nome' => 'Érick',
                'sobrenome' => 'Solon'
            ]
        ];

        $table = $this->table('pessoas');
        $table->insert($data)->save();
    }
}

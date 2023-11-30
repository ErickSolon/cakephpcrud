<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Infos seed.
 */
class InfosSeed extends AbstractSeed
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
                'telefone' => '1145637263',
                'email' => 'test@123.com',
                'pessoasid' => 1
            ],
            [
                'telefone' => '1184736251',
                'email' => 'email@fodase.com',
                'pessoasid' => 2
            ],
        ];

        $table = $this->table('infos');
        $table->insert($data)->save();
    }
}

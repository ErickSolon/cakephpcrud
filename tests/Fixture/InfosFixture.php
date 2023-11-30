<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InfosFixture
 */
class InfosFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'telefone' => 1,
                'email' => 'Lorem ipsum dolor sit amet',
                'pessoasid' => 1,
            ],
        ];
        parent::init();
    }
}

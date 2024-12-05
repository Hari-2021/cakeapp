<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BooksFixture
 */
class BooksFixture extends TestFixture
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
                'title' => 'Lorem ipsum dolor sit amet',
                'publisher_id' => 1,
                'author_id' => 1,
                'created' => '2024-12-05 04:28:29',
                'modified' => '2024-12-05 04:28:29',
            ],
        ];
        parent::init();
    }
}

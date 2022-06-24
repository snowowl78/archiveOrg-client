<?php

namespace Snowowl78\ArchiveOrg\Test;

use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    /**
     * @covers ClientTest::testMyTest
     * @return void
     */
    public function testMyTest(): void
    {
           $this->assertTrue(true, 'assertTrue is true');
    }

    /**
     * @covers \Snowowl78\ArchiveOrg\Client
     * @return void
     *
     */
    public function testClientFetchesMetadata(): void
    {
        $client = new \Snowowl78\ArchiveOrg\Client();

        $metadata = $client->fetchMetadata('nawarian-test');

        $this->assertSame('nawarian-test', $metadata->identifier());
        $this->assertSame('2019-02-19 20:00:38', $metadata->publicDate());
        $this->assertSame(['opensource_media','community'], $metadata->collection());
    }
}
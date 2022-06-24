<?php

namespace Snowowl78\ArchiveOrg;

use Snowowl78\ArchiveOrg\Item\Metadata;

class Client
{
    public function fetchMetadata(string $identifier): Metadata
    {
        // first attempt
//        return new \stdClass();

        //second attempt
        $jsonData = file_get_contents("https://archive.org/metadata/{$identifier}");
        $decoded = json_decode($jsonData, true);
        $metadata = $decoded['metadata'];

        return new Metadata(
            $metadata['identifier'],
            $metadata['publicdate'],
            $metadata['collection']
        );
    }
}
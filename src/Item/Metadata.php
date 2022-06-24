<?php

namespace Snowowl78\ArchiveOrg\Item;

class Metadata
{

    private $identifier;

    private $publicDate;

    private $collection;

    public function __construct(string $identifier, string $publicDate, array $collection)
    {
        $this->identifier = $identifier;
        $this->publicDate = $publicDate;
        $this->collection = $collection;
    }

    public function identifier(): string
    {
        return $this->identifier;
    }

    public function publicDate(): string
    {
        return $this->publicDate;
    }

    public function collection(): array
    {
        return $this->collection;
    }
}
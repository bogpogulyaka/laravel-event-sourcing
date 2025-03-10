<?php

namespace Spatie\EventSourcing\Snapshots;

class Snapshot
{
    public function __construct(
        public string|int $aggregateUuid,
        public int $aggregateVersion,
        public $state
    ) {
    }
}

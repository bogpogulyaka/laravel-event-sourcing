<?php

namespace Spatie\EventSourcing\Snapshots;

interface SnapshotRepository
{
    public function retrieve(string|int $aggregateUuid): ?Snapshot;

    public function persist(Snapshot $snapshot): Snapshot;
}

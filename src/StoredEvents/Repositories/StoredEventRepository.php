<?php

namespace Spatie\EventSourcing\StoredEvents\Repositories;

use Illuminate\Support\LazyCollection;
use Spatie\EventSourcing\StoredEvents\ShouldBeStored;
use Spatie\EventSourcing\StoredEvents\StoredEvent;

interface StoredEventRepository
{
    public function find(int $id): StoredEvent;

    public function retrieveAll(string|int|null $uuid = null): LazyCollection;

    public function retrieveAllStartingFrom(int $startingFrom, string|int|null $uuid = null): LazyCollection;

    public function retrieveAllAfterVersion(int $aggregateVersion, string|int $aggregateUuid): LazyCollection;

    public function countAllStartingFrom(int $startingFrom, string|int|null $uuid = null): int;

    public function persist(ShouldBeStored $event, string|int|null $uuid = null): StoredEvent;

    public function persistMany(array $events, string|int|null $uuid = null): LazyCollection;

    public function update(StoredEvent $storedEvent): StoredEvent;

    public function getLatestAggregateVersion(string|int $aggregateUuid): int;
}

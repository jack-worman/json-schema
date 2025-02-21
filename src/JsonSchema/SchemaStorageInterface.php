<?php

declare(strict_types=1);

namespace JsonSchema;

interface SchemaStorageInterface
{
    /**
     * Adds schema with given identifier
     *
     * @param string $id
     * @param object $schema
     */
    public function addSchema($id, $schema = null): void;

    /**
     * Returns schema for given identifier, or null if it does not exist
     *
     * @param string $id
     * @return object|string|false|null
     */
    public function getSchema($id);

    /**
     * Returns schema for given reference with all sub-references resolved
     *
     * @param string $ref
     * @return object|false
     */
    public function resolveRef($ref);

    /**
     * Returns schema referenced by '$ref' property
     *
     * @param mixed $refSchema
     * @return object|string|null
     */
    public function resolveRefSchema($refSchema);
}

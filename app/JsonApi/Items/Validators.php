<?php

namespace App\JsonApi\Items;

use CloudCreativity\LaravelJsonApi\Validation\AbstractValidators;

class Validators extends AbstractValidators
{

    /**
     * The include paths a client is allowed to request.
     *
     * @var string[]|null
     *      the allowed paths, an empty array for none allowed, or null to allow all paths.
     */
    protected $allowedIncludePaths = [];

    /**
     * The sort field names a client is allowed send.
     *
     * @var string[]|null
     *      the allowed fields, an empty array for none allowed, or null to allow all fields.
     */
    protected $allowedSortParameters = [];

    /**
     * The filters a client is allowed send.
     *
     * @var string[]|null
     *      the allowed filters, an empty array for none allowed, or null to allow all.
     */
    protected $allowedFilteringParameters = [];

    /**
     * Get resource validation rules.
     *
     * @param mixed|null $record
     *      the record being updated, or null if creating a resource.
     * @return mixed
     */
    protected function rules($record = null): array
    {
        return [
            //
        ];
    }

    /**
     * @var array
     */
    protected $deleteMessages = [
        'undone.accepted' => 'You can not delete undone items',
    ];

    /**
     * @param \App\Items $record
     * @return array|null
     */
    protected function deleteRules($record): ?array
    {
        return [
            'undone' => 'accepted',
        ];
    }

    /**
     * @param \App\Items $record
     * @return array
     */
    protected function dataForDelete($record): array
    {
        return [
            'undone' => !$record->done,
        ];
    }

    protected function queryRules(): array
    {
        return [];
    }
}

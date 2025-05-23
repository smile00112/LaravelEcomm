<?php

declare(strict_types=1);

namespace Modules\Tag\Repository;

use Illuminate\Support\Collection;
use Modules\Core\Repositories\Repository;
use Modules\Tag\Models\Tag;

class TagRepository extends Repository
{
    public $model = Tag::class;

    public function findAll(): Collection
    {
        return $this->model::orderBy('id', 'DESC')->get();
    }
}

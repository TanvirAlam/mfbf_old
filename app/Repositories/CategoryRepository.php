<?php

namespace App\Repositories;

interface CategoryRepository
{
    function search($query, $group_id);

    function getGroupId($group_name);

    function create(array $attributes);

    function delete($id);
}

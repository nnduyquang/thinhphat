<?php

namespace App\Repositories\Menu;

interface MenuRepositoryInterface
{
    public function getAllMenu();
    public function showCategoryDropDown($dd_categories, $parent_id = 0, &$newArray);
}
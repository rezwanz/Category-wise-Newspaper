<?php


namespace App\classes;


class Category
{
    public $categories = [];
    public $results = [];

    public function allCategories()
    {
        $this->categories = [
            0 => [
                'id' => 1,
                'name' => 'সর্বশেষ',
            ],
            1 => [
                'id' => 2,
                'name' => 'বিশেষ সংবাদ',
            ],
            2 => [
                'id' => 3,
                'name' => 'রাজনীতি',
            ],
            3 => [
                'id' => 4,
                'name' => 'বাংলাদেশ',
            ],
        ];
        return $this->categories;
    }

    public function getNewsByCategory($category_id, $allNews)
    {
        foreach ($allNews as $news)
        {
            if ($news['category_id'] == $category_id)
            {
                array_push($this->results, $news); // Array, Value
            }
        }
        return $this->results;
    }
}
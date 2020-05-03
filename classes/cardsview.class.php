<?php

class CardsView extends Query
{

    public function showAll()
    {
        return $this->getAll();
    }

    public function selectGame($id)
    {
        return $this->getGame($id);
    }
    public function countCategory(string $category)
    {
        return $this->getCategory($category);
    }
}

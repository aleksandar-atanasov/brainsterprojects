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
}

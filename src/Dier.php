<?php


class Dier
{

    public $id;
    public $name;
    public $type;

    /**
     * Dier constructor.
     * @param $id
     * @param $name
     * @param $type
     */
    public function __construct($id, $name, $type)
    {
        $this->id = $id;
        $this->name = $name;
        $this->type = $type;
    }
}


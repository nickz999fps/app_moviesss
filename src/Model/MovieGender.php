<?php
namespace APP\Model;
enum MovieGender{
    case ADVENTURE;
    case HORROR;
    case ACTION;
    case COMEDY;
    public function toString()
    {
        return $this->name;
    }
}
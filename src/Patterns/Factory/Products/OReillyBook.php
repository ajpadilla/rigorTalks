<?php

namespace RigorTalks\Patterns\Factory\Products;


class OReillyBook extends Book
{

    public function createTitle()
    {
        $this->title  = 'Programming PHP';
    }

    public function createSubject()
    {
        $this->subject = "PHP OReilly Book";
    }

    public function createAuthor()
    {
        $this->author = 'Rasmus Lerdorf and Kevin Tatroe';
    }
}
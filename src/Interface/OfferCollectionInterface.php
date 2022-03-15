<?php

namespace App\Interface;

interface OfferCollectionInterface
{

    public function get(int $index): OfferCollectionInterface;

    public function getIterator(): \Iterator;

}


<?php
final class Dog extends Animal
{
    public function bark(): string
    {
        return $this->name;
    }
}

<?php

interface IRun
{
    function run(): void;
}

interface IHunt
{
    function hunt(): void;
}

interface IWalk
{
    function walk(): void;
}

class Turtle implements IWalk
{
    public function walk(): void
    {

    }
}

class Tiger implements IHunt, IWalk, IRun
{
    public function hunt(): void
    {

    }

    public function run(): void
    {

    }

    public function walk(): void
    {

    }
}

?>
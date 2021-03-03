<?php

interface IReadable 
{
    public function get(int $id);
    public function getAll();

}

interface IWriteable
{
    public function update($id, object $obj);
    public function create(object $obj);
}

interface IRemovable
{
    public function remove(int $id);
}


class UserReadbleRepository implements IReadable
{
    public function get(int $id)
    {
        // ToDo
    }

    public function getAll()
    {
        // ToDo
    }
}


?>
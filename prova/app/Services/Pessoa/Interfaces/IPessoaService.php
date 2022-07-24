<?php

namespace App\Services\Pessoa\Interfaces;

interface IPessoaService
{
    public function store(array $request);
    public function show(int $id);
    public function destroy(int $id);
}

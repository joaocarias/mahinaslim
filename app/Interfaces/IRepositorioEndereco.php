<?php

namespace App\Interfaces;
use App\Models\Endereco;

interface IRepositorioEndereco {
    public function insertObj(Endereco $endereco);
}

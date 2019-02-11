<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personagem extends Model
{
    public $nome;
    public $tipo;
    public $forca;
    public $destreza;
    public $magia;
}

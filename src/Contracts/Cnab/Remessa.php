<?php
namespace Kspotx\LaravelBoleto\Contracts\Cnab;

interface Remessa extends Cnab
{
    public function gerar();
}

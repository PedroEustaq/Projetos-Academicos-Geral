<?php

interface Publicacao {
    public function abrir();
    public function fechar();
    public function folhear($r);
    public function avançarPag();
    public function voltarPag();
}

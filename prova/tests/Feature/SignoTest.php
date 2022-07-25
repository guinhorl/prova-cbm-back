<?php

use function Pest\Laravel\getJson;

test('Erro: teste de rota signos', function () {
    $this->get('/api/v0/signos')->assertStatus(500);
});

<?php

$app->get('/hello/{name}', [Src\Controllers\TestController::class, 'testServer']);

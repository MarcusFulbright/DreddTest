<?php

use Dredd\Hooks;

Hooks::beforeAll(function(&$transaction) {

    echo "before all php debug";
});
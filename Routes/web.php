<?php

use Pecee\SimpleRouter\SimpleRouter;
use App\Controllers\PortfolioControllers;
use App\Controllers\WellcomeControllers;





SimpleRouter::get(BASE_DIR. '/', [WellcomeControllers::class, 'index']);

SimpleRouter::get(BASE_DIR .'/portfolio', [PortfolioControllers::class, 'index']);


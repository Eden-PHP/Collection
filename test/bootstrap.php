<?php //-->
/*
 * This file is part of the Collection package of the Eden PHP Library.
 * (c) 2012-2013 Openovate Labs
 *
 * Copyright and license information can be found at LICENSE
 * distributed with this package.
 */
 
require_once __DIR__.'/../../Core/library/Eden/Core/Loader.php';
Eden\Core\Loader::i()
	->addRoot(true, 'Eden\\Core')
	->addRoot(realpath(__DIR__.'/../../Collection/library'), 'Eden\\Collection')
	->addRoot(realpath(__DIR__.'/../../Model/library'), 'Eden\\Model')
	->addRoot(realpath(__DIR__.'/../../Type/library'), 'Eden\\Type')
	->register()
	->load('Controller');
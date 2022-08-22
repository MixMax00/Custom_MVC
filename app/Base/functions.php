<?php 

function views(string $path, array $data = []): void
{

	//extract each array
	extract($data);
	require_once VIEWS .$path;
}


//get environment function

function env(string $key):string
{
	return isset($_ENV[$key]) ? $_ENV[$key] : ' ';
}

function assets(string $path): string
{

	return ASSET_URL .'/'.$path;
}
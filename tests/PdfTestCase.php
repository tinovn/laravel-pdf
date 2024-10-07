<?php

namespace tinovn\LaravelPdf\Test;

use tinovn\LaravelPdf\Facades\Pdf;
use tinovn\LaravelPdf\Providers\PdfServiceProvider;
use Orchestra\Testbench\TestCase;

class PdfTestCase extends TestCase
{
	/**
	 * Load package service provider
	 * @param  \Illuminate\Foundation\Application $app
	 * @return lasselehtinen\MyPackage\MyPackageServiceProvider
	 */
	protected function getPackageProviders($app): array
	{
		return [
            PdfServiceProvider::class,
        ];
	}

	/**
	 * Load package alias
	 * @param  \Illuminate\Foundation\Application $app
	 * @return array
	 */
	protected function getPackageAliases($app): array
	{
		return [
			'PDF' => Pdf::class,
		];
	}
}

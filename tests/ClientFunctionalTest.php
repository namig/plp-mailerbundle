<?php

namespace Plp\MailerBundle\Tests;

use PHPUnit\Framework\TestCase;
use Plp\MailerBundle\Bundle\PlpMailerBundle;
use Plp\MailerBundle\Service\Business\SubscriberService;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel;

class ClientFunctionalTest extends TestCase
{
	private $tasks = [
		[
			"integration" => [
				"service" => "mailerlite",
				"apiKey" => "493ede2b62a8027a21267c15c570b1b4",
				"groupId" => "10316644",
			],
			"lead" => [
				"name" => "Вася",
				"email" => "vasyaa@platformalp.ru",
			]
		],
		[
			"integration" => [
				"service" => "mailchimp",
				"apiKey" => "3b4984a8c54ad6cb2630e521f44c99f5-us13",
				"listId" => "554041503a",
			],
			"lead" => [
				"name" => "Петр",
				"email" => "petrr@platformalp.ru",
			]
		]
	];

	public function testClient()
	{
		$kernel = new PlpMailerBundleTestingKernel('test', true);
		$kernel->boot();
		$container = $kernel->getContainer();

		/** @var SubscriberService $subscriberService */
		$subscriberService = $container->get(SubscriberService::class);
		$subscriberService->subscribeList($this->tasks);

		// TODO: :)
		$this->assertEquals(true, true);
	}
}

class PlpMailerBundleTestingKernel extends Kernel
{
	public function registerBundles()
	{
		return [
			new PlpMailerBundle()
		];
	}

	public function registerContainerConfiguration(LoaderInterface $loader)
	{
		// TODO: Implement registerContainerConfiguration() method.
	}

}
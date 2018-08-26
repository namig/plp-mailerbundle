<?php
/**
 * Created by PhpStorm.
 * User: namig
 * Date: 26.08.2018
 * Time: 17:19
 */

namespace Plp\MailerBundle\Service\SO\Command\Subscriber\Subscribe\Settings;


use JMS\Serializer\Annotation as Serializer;
use Plp\MailerBundle\Service\SO\Command\ASettingsSO;

/**
 * @Serializer\Discriminator(field = "service", disabled = false, map = {
 *     "mailerlite": "Plp\MailerBundle\Service\SO\Command\Subscriber\Subscribe\Settings\MailerLiteSettingsSO",
 *     "mailchimp": "Plp\MailerBundle\Service\SO\Command\Subscriber\Subscribe\Settings\MailChimpSettingsSO"
 * })
 */
abstract class ASubscribeSettingsSO extends ASettingsSO
{
	abstract public function getIntegrationType(): string;
}
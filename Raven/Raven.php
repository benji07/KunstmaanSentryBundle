<?php
namespace Kunstmaan\SentryBundle\Raven;

use Raven_Client;
use Symfony\Component\HttpKernel\Kernel;

/**
 * Raven
 */
class Raven extends Raven_Client
{
    /**
     * @var string
     */
    private $enabled;

    /**
     * @param string $dsn     The dsn
     * @param string $enabled enabled ?
     */
    public function __construct($dsn, $enabled = true)
    {
        $this->enabled = $enabled;

        $options = array(
            'auto_log_stacks' => true,
            'trace'           => true,
            'tags'            => array(
                'php_version'     => phpversion(),
                'symfony_version' => Kernel::VERSION
            ),

        );

        if (isset($_SERVER["SERVER_NAME"])) {
            $options['name'] = $_SERVER["SERVER_NAME"];
        }

        parent::__construct($dsn, $options);
    }

    /**
     * @return string
     */
    public function isEnabled()
    {
        return $this->enabled;
    }
}

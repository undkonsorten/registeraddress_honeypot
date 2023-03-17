<?php

declare(strict_types=1);

namespace Undkonsorten\RegisteraddressHoneypot\Event;

use AFM\Registeraddress\Event\InitializeCreateActionEvent;
use Undkonsorten\HoneyPot\Service\HoneyPotService;

class RegisterAddressHoneypotEventListener
{

    /**
     * @var HoneyPotService
     */
    protected $honeyPotService;

    protected array $settings = [];

    public function __construct(array $settings = [])
    {
        $this->settings = $settings;
    }

    public function injectHoneyPotService(HoneyPotService $honeyPotService): void
    {
        $this->honeyPotService = $honeyPotService;
    }

    public function __invoke(InitializeCreateActionEvent $event)
    {
        if ($this->settings['enableHoneyPot']) {
            $argumentName = 'newAddress';
            $this->honeyPotService->configureHoneyPotForArgument(
                $event->getArguments()->getArgument($argumentName),
                $event->getRequest()->getArgument($argumentName),
                $this->settings['honeyPotFieldName']
            );
        }
    }

}

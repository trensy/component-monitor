<?php
/**
 * Trensy Framework
 *
 * PHP Version 7
 *
 * @author          kaihui.wang <hpuwang@gmail.com>
 * @copyright      trensy, Inc.
 * @package         trensy/framework
 * @version         1.0.7
 */

namespace Trensy\Component\Monitor\Command;

use Trensy\Console\Input\InputInterface;
use Trensy\Console\Output\OutputInterface;
use Trensy\Foundation\Command\Base;

class Status extends Base
{
    protected function configure()
    {
        $this
            ->setName('monitor:status')
            ->setDescription('show monitor server status');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        MonitorBase::operate("status", $output, $input);
    }
}

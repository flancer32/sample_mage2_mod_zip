<?php
/**
 * Script to register Magento 2 module.
 *
 * User: Alex Gusev <alex@flancer64.com>
 */
\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    \Flancer32\SampleZip\Config::MODULE,
    __DIR__
);
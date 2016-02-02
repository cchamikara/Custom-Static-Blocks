<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Muaw\CustomStaticBlocks\Setup;

use Magento\Framework\Setup;

class Installer implements Setup\SampleData\InstallerInterface
{

    /**
     * @var \Magento\CmsSampleData\Model\Page
     */
    private $page;

    /**
     * @var \Magento\CmsSampleData\Model\Block
     */
    private $block;

    /**
     * @param \Muaw\CustomStaticBlocks\Model\Page $page
     * @param \Muaw\CustomStaticBlocks\Model\Block $block
     */
    public function __construct(
        \Muaw\CustomStaticBlocks\Model\Page $page,
        \Muaw\CustomStaticBlocks\Model\Block $block
    ) {
        $this->page = $page;
        $this->block = $block;
    }

    /**
     * {@inheritdoc}
     */
    public function install()
    {

        //$this->page->install(['Muaw_CustomStaticBlocks::fixtures/pages/pages.csv']);
        $this->block->install(
            [

                'Muaw_CustomStaticBlocks::fixtures/blocks/pages_static_blocks.csv',
            ]
        );
    }
}
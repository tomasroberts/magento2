<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

/**
 * Stock Item collection interface
 */
namespace Magento\CatalogInventory\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

/**
 * Interface StockItemCollectionInterface
 * @package Magento\CatalogInventory\Api\Data
 */
interface StockItemCollectionInterface extends SearchResultsInterface
{
    /**
     * Get items
     *
     * @return \Magento\CatalogInventory\Api\Data\StockItemInterface[]
     */
    public function getItems();

    /**
     * Set items
     *
     * @param \Magento\CatalogInventory\Api\Data\StockItemInterface[] $items
     * @return $this
     */
    public function setItems(array $items = null);

    /**
     * Get search criteria.
     *
     * @return \Magento\CatalogInventory\Api\StockItemCriteriaInterface
     */
    public function getSearchCriteria();
}

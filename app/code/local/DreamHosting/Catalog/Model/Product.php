<?php
/**
 * Catalog product model
 *
 * @product   DreamHosting
 * @package    DreamHosting_Catalog
 */
class DreamHosting_Catalog_Model_Product extends Mage_Catalog_Model_Product
{
    /**
     * Retrieve collection related product sorted by 'sww_artikelomschrijving3'
     *
     * @return Mage_Catalog_Model_Resource_Product_Link_Product_Collection
     */
    public function getRelatedProductCollection()
    {
        $collection = $this->getLinkInstance()->useRelatedLinks()
            ->getProductCollection()
            ->setIsStrongMode();
        $collection->setProduct($this);
        $collection->setOrder('sww_artikelomschrijving3','ASC');
        return $collection;
    }
}